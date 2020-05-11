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

    	// dd($users);

        return view('admin.users.list', compact('users'));
    }

    public function add()
    {
		return view('admin.users.add-user');
    }

    public function insert(Request $request)
    {

    	// dd($request->all());

    	// exit;

	    $user = new Users;

	    $user->name 					= $request->name;
	    $user->address 					= $request->address;
	    $user->email 					= $request->email;
	    $user->phone 					= $request->phone;
	    $user->education 				= $request->education;
	    $user->marital_status 			= $request->marital_status;
	    $user->dob			 			= $request->dob_;
	    $user->emp_type			 		= $request->emp_type;
	    $user->monthly_income			= $request->monthly_income;
	    $user->working_since			= $request->working_since;
	    $user->company_name				= $request->company_name;
	    $user->company_address			= $request->company_address;
	    $user->company_phone			= $request->company_phone;
	    $user->ref1_name				= $request->ref1_name;
	    $user->ref1_phone				= $request->ref1_phone;
	    $user->ref1_address				= $request->ref1_address;
	    $user->ref2_name				= $request->ref2_name;
	    $user->ref2_phone				= $request->ref2_phone;
	    $user->ref2_address				= $request->ref2_address;
	    $user->urgent_contact_name		= $request->urgent_contact_name;
	    $user->urgent_contact_phone		= $request->urgent_contact_phone;
	    $user->urgent_contact_address	= $request->urgent_contact_address;
	    $user->bank_name			 	= $request->bank_name;
	    $user->bank_branch			 	= $request->bank_branch;
	    $user->bank_address			 	= $request->bank_address;
	    $user->account_number			= $request->account_number;
	    $user->bank_account_name		= $request->bank_account_name;
	    $user->bank_account_type		= $request->bank_account_type;
	    $user->ifsc			 			= $request->ifsc;
	    $user->status			 		= $request->status;
	    $user->password					= app('hash')->make('123456s');


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

    public function edit($id)
    {

    	$user = Users::where('id', $id)->get();
    	
    	// dd($user);
        return view('admin.users.edit-user', compact('user'));
    }

    public function update(Request $request)
    {
    	// dd($request->id);

    			$user = array(
    							'name' => $request->name, 
    							'address' => $request->address, 
    							'email' => $request->email, 
    							'phone' => $request->phone, 
    							'education' => $request->education, 
    							'marital_status' => $request->marital_status, 
    							'dob' => $request->dob, 
    							'emp_type' => $request->emp_type, 
    							'monthly_income' => $request->monthly_income, 
    							'working_since' => $request->working_since, 
    							'company_name' => $request->company_name, 
    							'company_address' => $request->company_address, 
    							'company_phone' => $request->company_phone, 
    							'ref1_name' => $request->ref1_name, 
    							'ref1_phone' => $request->ref1_phone, 
    							'ref1_address' => $request->ref1_address, 
    							'ref2_name' => $request->ref2_name, 
    							'ref2_phone' => $request->ref2_phone, 
    							'ref2_address' => $request->ref2_address, 
    							'urgent_contact_name' => $request->urgent_contact_name, 
    							'urgent_contact_phone' => $request->urgent_contact_phone, 
    							'urgent_contact_address' => $request->urgent_contact_address, 
    							'bank_name' => $request->bank_name, 
    							'bank_branch' => $request->bank_branch, 
    							'bank_address' => $request->bank_address, 
    							'account_number' => $request->account_number, 
    							'bank_account_name' => $request->bank_account_name, 
    							'bank_account_type' => $request->bank_account_type, 
    							'ifsc' => $request->ifsc, 
    							'status' => $request->status
    						);

    			// $user['test'] = 'tsee';

    	    	
    	    	
    		    if ($request->hasFile('selfie')) 
    		    {
    			    if(isset($_FILES['selfie']) && $_FILES['selfie'] !='') {
    		            $file = $request->file('selfie');
    		            $selfie = time().rand(111, 999) . '.' . $file->getClientOriginalExtension();
    		            $request->file('selfie')->move(public_path("uploads"), $selfie);

    		            // $user->selfie = $selfie;
    		            $user['selfie'] = $selfie;

    		        }
    		    } 

    		    if ($request->hasFile('aadhar')) 
    		    {
    			    if(isset($_FILES['aadhar']) && $_FILES['aadhar'] !='') {
    		            $file = $request->file('aadhar');
    		            $aadhar = time().rand(111, 999) . '.' . $file->getClientOriginalExtension();
    		            $request->file('aadhar')->move(public_path("uploads"), $aadhar);
    		            
    		            // $user->aadhar_card = $aadhar;
    		            $user['aadhar_card'] = $aadhar;
    		        }
    		    }
    	       
    		    if ($request->hasFile('pan')) 
    		    {
    			    if(isset($_FILES['pan']) && $_FILES['pan'] !='') {
    		            $file = $request->file('pan');
    		            $pan = time().rand(111, 999) . '.' . $file->getClientOriginalExtension();
    		            $request->file('pan')->move(public_path("uploads"), $pan);
    		            
    		            // $user->pan_card = $pan;
    		            $user['pan_card'] = $pan;
    		        }
    		    }


    	$affectedRows = Users::where("id", $request->id)->update($user);
    	        // dd($user);

    	return $user;



    }

    public function delete($id)
    {

    	// dd($id);

    	// exit();



    	Users::where('id', $id)->delete();
    	return redirect('admin/users');


    }
}