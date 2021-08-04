<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminUser extends Authenticatable
{
    // protected $guard = 'admin';
 
        protected $fillable = [
            'name', 'email', 'password','password_text',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}