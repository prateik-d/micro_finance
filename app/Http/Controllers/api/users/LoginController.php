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



class LoginController extends Controller
{

	public function __construct()
    {

    }

    public function index(Request $request)
    {

    	if($_POST)
    	{
    		$email = $request->email;
    		$password = $request->password;

    		$user = Users::where('email', '=', $email)->first();

    		// dd($user);

    		if (!$user) 
    		{
    		 
    		 	return array
                                (
                                    'status'      => 0, 
                                    'message'    => 'Login Fail, Please check credential'
                                );
    		}
    		else if (!Hash::check($password, $user->password)) 
    		{
				return array
	                            (
	                                'status'      => 0, 
	                                'message'    => 'Login Fail, Please check credential'
	                            );
    		}
    		else
    		{

    			Session::put(array
    			                    ( 
    			                    	'user_id'      => $user->id, 
                            			'user_name'    => $user->name, 
                            			'user_email'   => $user->email,
    			                        'user'         => 'user'

    			                    )
    			            );


    			return array
                        (
                            'user_id'      => $user->id, 
                            'user_name'    => $user->name, 
                            'user_email'   => $user->email,
                            'status'	   => '1',
	                        'message'      => 'Login successful'
                        );
    		}


    	}
    	else
    	{    	    
    		return 0;
    	}
    }
}