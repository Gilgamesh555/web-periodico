<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MailController;

class AuthController extends Controller
{
    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function register(Request $request)
    {
        if($request->tipo === "est"){
            $request->validate([
                'ru' => 'required|string|unique:users',
                // 'name' => 'required|string',
                'f_nac' => 'required',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|string|confirmed|min:8',
            ]);
    
            $user = new User([
                'ru' => $request->ru,
                'f_nac' => $request->f_nac,
                'name' => $request->name,
                'email' => $request->email,
                'verification_code' => sha1(time()),
                'password' => bcrypt($request->password),
            ]);
        }else{
            if($request->tipo === "doc"){
                $request->validate([
                    // 'ru' => 'required|string|unique:users',
                    'ci' => 'required|string|unique:users',
                    // 'name' => 'required|string',
                    'f_nac' => 'required',
                    'email' => 'required|string|email|unique:users',
                    'password' => 'required|string|confirmed|min:8',
                ]);
        
                $user = new User([
                    // 'ru' => $request->ru,
                    'f_nac' => $request->f_nac,
                    'name' => $request->name,
                    'email' => $request->email,
                    'verification_code' => sha1(time()),
                    'password' => bcrypt($request->password),
                ]); 
            }else{
                $request->validate([
                    // 'ru' => 'required|string|unique:users',
                    'name' => 'required|string',
                    'ci' => 'required|string|unique:users',
                    'f_nac' => 'required',
                    'email' => 'required|string|email|unique:users',
                    'password' => 'required|string|confirmed|min:8',
                ]);
        
                $user = new User([
                    // 'ru' => $request->ru,
                    'name' => $request->name,
                    'ci' => $request->ci,
                    'f_nac' => $request->f_nac,
                    'name' => $request->name,
                    'email' => $request->email,
                    'verification_code' => sha1(time()),
                    'password' => bcrypt($request->password),
                ]); 
            }
        }

        return response()->json([
            'success' => true,
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ], 201);
    }

    public function lastregister(Request $request){
        $user;
        if($request->tipo === "est"){
            $user = new User([
                'ru' => $request->ru,
                'f_nac' => $request->f_nac,
                'name' => $request->name,
                'email' => $request->email,
                'verification_code' => sha1(time()),
                'password' => bcrypt($request->password),
            ]);        
        }else{
            if($request->tipo === "doc"){
                $user = new User([
                    // 'ru' => $request->ru,
                    'ci' => $request->ci,
                    'name' => $request->name,
                    'f_nac' => $request->f_nac,
                    'email' => $request->email,
                    'verification_code' => sha1(time()),
                    'password' => bcrypt($request->password),
                ]);   
            }else{
                $user = new User([
                    // 'ru' => $request->ru,
                    'name' => $request->name,
                    'ci' => $request->ci,
                    'f_nac' => $request->f_nac,
                    'email' => $request->email,
                    'verification_code' => sha1(time()),
                    'password' => bcrypt($request->password),
                ]);     
            }
        }

        $response = $user->save();   

        if($response){
            MailController::sendSignUpEmail($user->name, $user->email, $user->verification_code);
            // return redirect()->route('login');
        }
        
        return response()->json([
            'success' => true,
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ], 201);
    }


    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized Access, please confirm credentials or verify your email'
            ], 401);

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)$token->expires_at = Carbon::now()->addSeconds(120);
            // $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'success' => true,
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'zz' => Carbon::now()->toDateTimeString(),
        ], 201);
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    public function verifyUser(Request $request){
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = User::where(['verification_code' => $verification_code])->first();
        if($user != null){
            $user->update(array('is_verified' => 1));
            $user->save();
            return redirect()->route('login');
        }
    }
}