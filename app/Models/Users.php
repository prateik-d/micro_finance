<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table = 'users';

    protected $fillable = [
        'name', 'selfie', 'address', 'aadhar_card', 'pan_card', 'email', 'email_verified_at', 'password', 'phone', 'education', 'doj', 'marital_status', 'remember_token', 'created_at', 'updated_at', 'otp',
    ];
}
