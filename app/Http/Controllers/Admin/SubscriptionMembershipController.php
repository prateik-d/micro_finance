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




class SubscriptionMembershipController extends Controller
{

    public function show()
    {
        if(Session::get('admin') )
        {

            $membership_records = DB::table('membership_record')
                       ->join('users', 'users.id', '=', 'membership_record.user_id')
                       ->select('membership_record.*','users.name','users.email','users.phone')
                       ->get();
            // dd($membership_records);


            return view('admin.subscription_membership.index', compact('membership_records'));
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