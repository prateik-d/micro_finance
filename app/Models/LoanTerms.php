<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanTerms extends Model
{
    protected $table = 'loan_term';

    protected $fillable = [
        'days', 'status', 'created_at', 'updated_at',
    ];
}
