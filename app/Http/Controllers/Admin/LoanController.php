<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Users;
use App\Models\SubscriptionMembership;
use Session;
use Illuminate\Support\Facades\Redirect;

use DB;




class LoanController extends Controller
{

    public function show()
    {
        if(Session::get('admin') )
        {

            $loans = DB::table('loan_application_master')
                       ->join('users', 'users.id', '=', 'loan_application_master.user_id')
                       ->select('loan_application_master.*','users.name','users.email','users.phone')
                       ->get();
            // dd($membership_records);


            return view('admin.loan_master.index', compact('loans'));
        }
        else
        {
            return Redirect::to('/admin/');
        }
    }

    // public function edit($id)
    // {
    //     if(Session::get('admin') )
    //     {
    //         if(!$_POST)
    //         {
    //             $membership_package = SubscriptionMembership::where('id', $id)->get();

    //             return view('admin.membership_package.edit', compact('membership_package'));
    //         }
    //     }
    //     else
    //     {
    //         return Redirect::to('/admin/');
    //     }

    // }
    
    // public function update(Request $request)
    // {
    //     if(Session::get('admin') )
    //     {
    //         if($_POST)
    //         {


    //             $membership_package = array(

    //                                     'name' => $request->name, 
    //                                     'duration' => $request->duration, 
    //                                     'amount' => $request->amount, 
    //                                     'status' => $request->status, 
    //                             );
    //             // dd($membership_package);

    //             $affectedRows = SubscriptionMembership::where("id", $request->id)->update($membership_package);

    //             return redirect('admin/membership-package')->with('alert-success', 'Membership Packagae updated successfully.');
    //         }
            
    //     }
    //     else
    //     {
    //         return Redirect::to('/admin/');
    //     }

    // }

    // public function delete($id)
    // {
    //     if(Session::get('admin') )
    //     {

    //     	SubscriptionMembership::where('id', $id)->delete();
    //         return redirect('admin/membership-package')->with('alert-success', 'Loan amount deleted successfully.');
    //     }
    //     else
    //     {
    //         return Redirect::to('/admin/');
    //     }

    // }
}