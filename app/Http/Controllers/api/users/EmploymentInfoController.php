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



class EmploymentInfoController extends Controller
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
                            
                            'emp_type' => $request->emp_type, 
                            'monthly_income' => $request->monthly_income, 
                            'working_since' => $request->working_since, 
                            'company_name' => $request->company_name, 
                            'company_address' => $request->company_address, 
                            'company_phone' => $request->company_phone, 
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