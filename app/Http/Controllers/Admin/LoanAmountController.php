<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Users;
use App\Models\LoanAmount;
use Session;
use Illuminate\Support\Facades\Redirect;




class LoanAmountController extends Controller
{

    public function show()
    {
        if(Session::get('admin') )
        {
        	$loan_amounts = LoanAmount::get();

            return view('admin.loan_amount.index', compact('loan_amounts'));
        }
        else
        {
            return Redirect::to('/admin/');
        }
    }

    public function add(Request $request)
    {
        if(Session::get('admin') )
        {
            if($_POST)
            {
                // dd($_POST);

                $loan_amount = new LoanAmount;

                $loan_amount->amount = $request->amount;
                $loan_amount->status = $request->status;

                $loan_amount->save();

                return redirect('admin/loan-amount')->with('alert-success', 'Loan amount added successfully.');
            }
            else
            {
		      return view('admin.loan_amount.add');
            }

        }
        else
        {
            return Redirect::to('/admin/');
        }
    }

    public function edit($id)
    {
        if(Session::get('admin') )
        {
            if(!$_POST)
            {
                $loan_amount = LoanAmount::where('id', $id)->get();

                return view('admin.loan_amount.edit', compact('loan_amount'));
            }
        }
        else
        {
            return Redirect::to('/admin/');
        }

    }
    
    public function update(Request $request)
    {
        if(Session::get('admin') )
        {
            if($_POST)
            {

                $loan_amount = array(

                                        'amount' => $request->amount, 
                                        'status' => $request->status, 
                                );

                $affectedRows = LoanAmount::where("id", $request->id)->update($loan_amount);

                return redirect('admin/loan-amount')->with('alert-success', 'Loan amount updated successfully.');
            }
            
        }
        else
        {
            return Redirect::to('/admin/');
        }

    }

   public function delete($id)
    {
        if(Session::get('admin') )
        {
        	LoanAmount::where('id', $id)->delete();
            return redirect('admin/loan-amount')->with('alert-success', 'Loan amount deleted successfully.');
        }
        else
        {
            return Redirect::to('/admin/');
        }

    }
}