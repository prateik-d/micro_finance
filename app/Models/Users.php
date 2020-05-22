<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table = 'users';

    protected $fillable = [
        'name',
        'selfie', 
        'address', 
        'aadhar_card', 
        'pan_card', 
        'email', 
        'email_verified_at', 
        'password', 
        'phone', 
        'education', 
        'doj', 
        'marital_status', 
        'remember_token', 
        'created_at', 
        'updated_at', 
        'otp', 
        'dob', 
        'doj', 
        'emp_type', 
        'monthly_income', 
        'working_since', 
        'company_name', 
        'company_address', 
        'company_phone', 
        'ref1_name', 
        'ref1_phone', 
        'ref1_address', 
        'ref2_name', 
        'ref2_phone', 
        'ref2_address', 
        'urgent_contact_name', 
        'urgent_contact_phone', 
        'urgent_contact_address', 
        'bank_name', 
        'bank_branch', 
        'bank_address', 
        'account_number', 
        'bank_account_name', 
        'bank_account_type', 
        'ifsc', 
        'status',
    ];
}
