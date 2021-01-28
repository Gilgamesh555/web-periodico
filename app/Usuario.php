<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Usuario extends Model
{
    //

    use Notifiable;

    protected $table =  'react.users';
    protected $fillable = [
        'name',
        'username',
        'password',
        'tipo',
    ];
}
