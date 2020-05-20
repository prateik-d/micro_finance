<?php

namespace App\Http\Controllers\api\users;

use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Users;
use App\Models\Loan;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
use Response;

use Hash;



class LoanController extends Controller
{

	public function __construct()
    {

    }

    public function add(Request $request)
    {

    	if($_POST)
    	{

            $loan = new Loan;

            $loan->user_id          = $request->user_id;
            $loan->loan_amount      = $request->loan_amount;
            $loan->interest         = $request->interest;
            $loan->loan_term_day    = $request->loan_term_day;
            $loan->loan_date        = date("Y-m-d");
            $loan->loan_status      = '0';
            
            $loan->save();

            return $loan;    		
    	}
    	else
    	{
    		return 0;
    	}
    }


    public function show_($id)
    {
        
            $loan = Loan::where('user_id', '=', $id)->first();

            if (!$loan) 
            {
             
                return array
                                (
                                    'status'      => 0, 
                                    'message'    => 'Something went wrong.'
                                );
            }
            else
            {

                return array
                        (
                            'id'            => $loan->id, 
                            'user_id'       => $loan->user_id, 
                            'loan_amount'   => $loan->loan_amount, 
                            'interest'      => $loan->interest,
                            'paid_amount'   => $loan->paid_amount,
                            'due_amount'    => $loan->due_amount,
                            'loan_term_day' => $loan->loan_term_day,
                            'loan_date'     => $loan->loan_date,
                            'loan_status'   => $loan->loan_status,
                            'status'        => '1',
                            'message'       => 'Data fetch successful'
                        );
            }

        
    }


}