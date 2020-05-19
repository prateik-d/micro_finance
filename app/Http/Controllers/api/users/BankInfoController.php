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



class BankInfoController extends Controller
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
                            'bank_name' => $request->bank_name, 
                            'bank_branch' => $request->bank_branch, 
                            'bank_address' => $request->bank_address, 
                            'account_number' => $request->account_number, 
                            'bank_account_name' => $request->bank_account_name, 
                            'bank_account_type' => $request->bank_account_type, 
                            'ifsc' => $request->ifsc, 
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