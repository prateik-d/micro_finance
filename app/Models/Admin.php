<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $fillable = [
        'name', 'email', 'password', 'forgot_password_token', 'created_at', 'updated_at', 'otp',
    ];
}
