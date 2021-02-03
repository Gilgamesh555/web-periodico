<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth', 'verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function noti($id){
        return view('layouts.BlogDetails', ['id' => $id]);
    }
    public function cat($id){
        return view('layouts.CategoriesIndex', ['id' => $id]);
    }
    public function announce($id){
        return view('layouts.AnnounceIndex', ['id' => $id]);
    }
    public function sect($id){
        return view('layouts.SectionDetails', ['id' => $id]);
    }
    public function info(){
        return view('layouts.InfoIndex');
    }
    public function infodet($id){
        return view('layouts.InfoDetails', ['id' => $id]);
    }
    public function contacts(){
        return view('layouts.ContactIndex');
    }
    public function transmition(){
        return view('layouts.TransmitionIndex');
    }
    public function tvu(){
        return view('layouts.TVUIndex');
    }
    public function admin(){
        return view('layouts.admin');
    }
}
