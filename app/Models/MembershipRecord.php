<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipRecord extends Model
{
    protected $table = 'membership_record';

    protected $fillable = [
        'user_id' ,'name', 'duration', 'amount', 'created_at', 'updated_at',
    ];

}
