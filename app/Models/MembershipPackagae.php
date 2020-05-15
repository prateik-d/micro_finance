<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipPackagae extends Model
{
    protected $table = 'membership_package';

    protected $fillable = [
        'name', 'duration', 'amount', 'created_at', 'updated_at',
    ];
}
