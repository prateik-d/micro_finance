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

            // $user->name         = $request->name;
            // $user->phone        = $request->mobile;
            $user->email        = $request->email;
            $user->otp          = $otp;
            $user->password     = app('hash')->make('123456');




            $data = array('otp' => $otp, 'email' => $email );

            Mail::send('users.emails.signup_otp', ['data' => $data, 'otp' => $otp], function ($m) use ($data) {
                $m->from('admin@microfinance.com','Micro finance');

                $m->to($data['email'])->subject('Get OTP for signing up.');
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


    public function forgot_password(Request $request)
    {
        if($_POST)
        {
            $email = $request->email;

            $user=DB::table('users')->where('email',$email)->limit(1);

            if($user)
            {       

                $otp = mt_rand(100000, 999999);

                $data = array('otp' => $otp, 'email' => $request->email );

                // dd($data['email']);

                $user_email = $data['email'];


                Mail::send('users.emails.reset_password', ['data' => $data, 'otp' => $otp], function ($m) use ($data) {
                    $m->from('admin@syncredit.com','Micro finance');

                    $m->to($data['email'])->subject('Get OTP for Reset password.');
                });


                $user->update(['otp'=>$otp]);

                return  array('email' => $email, 'otp' => $otp);
            }
            else
            {
                return 0;
            }
        }
        else
        {
            return 0;
        }
    }

    public function reset_password(Request $request)
    {
        if($_POST)
        {
            $email = $request->email;
            $npass = $request->npass;

            // dd($npass);

            $user=DB::table('users')->where('email',$email)->limit(1);

            if($user)
            {       
                $enc_pass = app('hash')->make($npass);
                
                $user->update(['password'=>$enc_pass]);

                return $npass;
            }
            else
            {
                return 0;
            }
        }
        else
        {
            return 0;
        }
    }

}