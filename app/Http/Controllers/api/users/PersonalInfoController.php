<?php

namespace App\Http\Controllers\api\users;

use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Users;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
use Response;

use Hash;



class PersonalInfoController extends Controller
{

	public function __construct()
    {

    }

    public function add(Request $request)
    {

    	if($_POST)
    	{
    		$id = $request->id;

            $user = array(
                            'name' => $request->name, 
                            'email' => $request->email, 
                            'address' => $request->address, 
                            'phone' => $request->phone, 
                            'education' => $request->education, 
                            'marital_status' => $request->marital_status, 
                            'dob' => $request->dob
                        );
                

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


            $affectedRows = Users::where("id", $id)->update($user);

            $user_data = Users::where('id', '=', $id)->first();

            return $user_data;

    		
    	}
    	else
    	{    	    
    		return 0;
    	}
    }
}