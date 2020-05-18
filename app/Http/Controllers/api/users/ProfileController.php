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
use Mail;

use Hash;



class ProfileController extends Controller
{

	public function __construct()
    {

    }

    public function reset_password(Request $request)
    {
    	if($_POST)
    	{
    		$id       = $request->id;
            $cpass   = $request->cpass;
            $npass     = $request->npass;

            $user = Users::where('id', '=', $id)->first();

            if (!Hash::check($cpass, $user->password)) 
            {
                return array(
                                'status' => 0, 
                                'message' => 'Confirm password is not matched'
                            );
            }
            else
            {
                $enc_pass = app('hash')->make($npass);
                
                $pass=DB::table('users')->where('id',$id)->limit(1);
                $pass->update(['password'=>$enc_pass]);

                return array(
                                'status' => 1, 
                                'message' => 'Password changed successfully.'
                            );

            }

        }
    	else
    	{    	    
    		return 0;
    	}
    }

    public function check_otp(Request $request)
    {
        if($_POST)
        {
            $email    = $request->email;
            $otp      = $request->otp;

            $user = Users::where('email', '=', $email)->first();

            if (!$user) 
            {
             
                return array
                                (
                                    'status'      => 0, 
                                    'message'    => 'Wrong Email, Please check email'
                                );
            }

            if($user->otp == $otp)
            {
                return array
                            (
                                'status'      => 1, 
                                'message'    => 'OTP matched'
                            ); 
            }
            else
            {
                return array
                            (
                                'status'      => 0, 
                                'message'    => 'OTP not matched'
                            ); 
            }

            return $user->otp;
        }
        else
        {           
            return 0;
        }

    }
}