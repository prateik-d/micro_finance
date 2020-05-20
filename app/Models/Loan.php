<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'loan_application_master';

    protected $fillable = [
        'user_id', 'loan_amount', 'interest', 'paid_amount', 'due_amount', 'loan_term_day', 'loan_date', 'loan_status', 'created_at', 'updated_at',
    ];
}
