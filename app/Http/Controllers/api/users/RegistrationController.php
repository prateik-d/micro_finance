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



class RegistrationController extends Controller
{

	public function __construct()
    {

    }

    public function get_otp(Request $request)
    {
    	if($_POST)
    	{
    		$email    = $request->email;
            $mobile   = $request->mobile;
            $name     = $request->name;


            $otp = mt_rand(100000, 999999);


            $user = new Users;

            $user->name         = $request->name;
            $user->phone        = $request->mobile;
            $user->email        = $request->email;
            $user->otp          = $otp;
            $user->password     = app('hash')->make('123456');




            $data = array('otp' => $otp, 'email' => $email );

            
            Mail::send('admin.emails.forgot_password', $data, function ($message) {
            // Mail::send('users.emails.signup_otp.blade', $data, function ($message) {
                $message->from('admin@microfinance.com','Micro finance');
                $message->to('pratik.dhotmal@gmail.com');
                // $message->to($email);
                $message->subject('Get OTP for signing up.');
            });


            $user->save();

            return $user;

            // return $data;
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