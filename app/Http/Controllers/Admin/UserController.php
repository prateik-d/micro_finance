<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Users;

use Hash;



class UserController extends Controller
{
    public function show()
    {
    	$users = Users::get();

        return view('admin.users.list', compact('users'));
    }

    public function add()
    {
		return view('admin.users.add-user');
    }

    public function insert(Request $request)
    {

	    $user = new Users;

	    $user->name 			= $request->name;
	    $user->address 			= $request->address;
	    $user->email 			= $request->email;
	    $user->phone 			= $request->phone;
	    $user->education 		= $request->education;
	    $user->marital_status 	= $request->marital_status;
	    $user->dob			 	= $request->dob_;
	    $user->password			= app('hash')->make('123456s');


	    if ($request->hasFile('selfie')) 
	    {
		    if(isset($_FILES['selfie']) && $_FILES['selfie'] !='') {
	            $file = $request->file('selfie');
	            $selfie = time().rand(111, 999) . '.' . $file->getClientOriginalExtension();
	            $request->file('selfie')->move(public_path("uploads"), $selfie);

	            $user->selfie = $selfie;
	        }
	    }
        else
        {
            $user->selfie = '';
        }

	    if ($request->hasFile('aadhar')) 
	    {
		    if(isset($_FILES['aadhar']) && $_FILES['aadhar'] !='') {
	            $file = $request->file('aadhar');
	            $aadhar = time().rand(111, 999) . '.' . $file->getClientOriginalExtension();
	            $request->file('aadhar')->move(public_path("uploads"), $aadhar);
	            
	            $user->aadhar_card = $aadhar;
	        }
	    }
        else
        {
            $user->aadhar = '';
        }

	    if ($request->hasFile('pan')) 
	    {
		    if(isset($_FILES['pan']) && $_FILES['pan'] !='') {
	            $file = $request->file('pan');
	            $pan = time().rand(111, 999) . '.' . $file->getClientOriginalExtension();
	            $request->file('pan')->move(public_path("uploads"), $pan);
	            
	            $user->pan_card = $pan;
	        }
	    }
        else
        {
	        $user->pan = '';
        }

        $user->save();

        return $user;

    }
}