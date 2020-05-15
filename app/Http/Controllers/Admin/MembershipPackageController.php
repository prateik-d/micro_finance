<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\MembershipPackagae;
use Session;
use Illuminate\Support\Facades\Redirect;




class MembershipPackageController extends Controller
{

    public function show()
    {
        if(Session::get('admin') )
        {
        	$membership_packages = MembershipPackagae::get();

            return view('admin.membership_package.index', compact('membership_packages'));
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

                $membership_package = new MembershipPackagae;

                $membership_package->name = $request->name;
                $membership_package->duration = $request->duration;
                $membership_package->amount = $request->amount;
                $membership_package->status = $request->status;

                $membership_package->save();

                return redirect('admin/membership-package')->with('alert-success', 'Membership Packagae added successfully.');
            }
            else
            {
		      return view('admin.membership_package.add');
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
                $membership_package = MembershipPackagae::where('id', $id)->get();

                return view('admin.membership_package.edit', compact('membership_package'));
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


                $membership_package = array(

                                        'name' => $request->name, 
                                        'duration' => $request->duration, 
                                        'amount' => $request->amount, 
                                        'status' => $request->status, 
                                );
                // dd($membership_package);

                $affectedRows = MembershipPackagae::where("id", $request->id)->update($membership_package);

                return redirect('admin/membership-package')->with('alert-success', 'Membership Packagae updated successfully.');
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

        	MembershipPackagae::where('id', $id)->delete();
            return redirect('admin/membership-package')->with('alert-success', 'Loan amount deleted successfully.');
        }
        else
        {
            return Redirect::to('/admin/');
        }

    }
}