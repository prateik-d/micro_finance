<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Users;
use App\Models\LoanTerms;
use Session;
use Illuminate\Support\Facades\Redirect;




class LoanTermsController extends Controller
{

    public function show()
    {
        if(Session::get('admin') )
        {
        	$loan_terms = LoanTerms::get();

            return view('admin.loan_terms.index', compact('loan_terms'));
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

                $loan_terms = new LoanTerms;

                $loan_terms->days = $request->days;
                $loan_terms->status = $request->status;

                $loan_terms->save();

                return redirect('admin/loan-term-days')->with('alert-success', 'Loan term added successfully.');
            }
            else
            {
		      return view('admin.loan_terms.add');
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
                $loan_terms = LoanTerms::where('id', $id)->get();

                return view('admin.loan_terms.edit', compact('loan_terms'));
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

                                        'days' => $request->days, 
                                        'status' => $request->status, 
                                );

                $affectedRows = LoanTerms::where("id", $request->id)->update($loan_amount);

                return redirect('admin/loan-term-days')->with('alert-success', 'Loan term updated successfully.');
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
        	LoanTerms::where('id', $id)->delete();
            return redirect('admin/loan-term-days')->with('alert-success', 'Loan term deleted successfully.');
        }
        else
        {
            return Redirect::to('/admin/');
        }

    }
}