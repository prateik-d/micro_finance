<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanAmount extends Model
{
    protected $table = 'loan_amount';

    protected $fillable = [
        'amount', 'status', 'created_at', 'updated_at',
    ];
}
