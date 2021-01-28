<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'ru'=>'72721',
            'name'=>"zero",
            'email' => "zero@gmail.com",
            'password'=>bcrypt("zero"),
            'estado'=>"activo",
            'f_nac'=>"2021-01-27",
        ]);
    }
}
