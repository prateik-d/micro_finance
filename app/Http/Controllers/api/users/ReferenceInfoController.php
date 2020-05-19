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



class ReferenceInfoController extends Controller
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
                            'ref1_name' => $request->ref1_name, 
                            'ref1_phone' => $request->ref1_phone, 
                            'ref1_address' => $request->ref1_address, 
                            'ref2_name' => $request->ref2_name, 
                            'ref2_phone' => $request->ref2_phone, 
                            'ref2_address' => $request->ref2_address, 
                            'urgent_contact_name' => $request->urgent_contact_name, 
                            'urgent_contact_phone' => $request->urgent_contact_phone, 
                            'urgent_contact_address' => $request->urgent_contact_address, 
                        );
                

            $affectedRows = Users::where("id", $request->id)->update($user);


            $user_data = Users::where('id', '=', $id)->first();

            return $user_data;
    		
    	}
    	else
    	{    	    
    		return 0;
    	}
    }
}