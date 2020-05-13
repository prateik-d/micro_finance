<?php

namespace App\Http\Controllers\Admin;

use Auth;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Users;
use App\Models\Admin;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use Mail;


use Hash;


class DashboardController extends Controller
{
	public function login(Request $request)
	{
        if($_POST)
        {
            

                $email = $request->email;
                $password = $request->password;

                $user = Admin::where('email', '=', $email)->first();

                // dd($email);

                if (!$user) 
                {
                   return redirect('admin')->withErrors(['Login Fail, Please check credential']);
                }

                if (!Hash::check($password, $user->password)) 
                {
                   return redirect('admin')->withErrors(['Login Fail, Please check credential']);
                }


                Session::put(array
                                    (
                                        'admin_id'      => $user->id, 
                                        'admin_name'    => $user->name, 
                                        'admin_email'   => $user->email,
                                        'admin'         => 'admin'

                                    )
                            );


                return redirect('admin/dashboard');
            
        }
        else
        {
		    return view('admin.login.index');		
        }
	}

    public function show()
    {

        if(Session::get('admin'))
        {
        	$users = Users::get();

            return view('admin.dashboard.index', compact('users'));
        }
        else
        {
            return Redirect::to('/admin/');
        }
        
    }

    public function profile()
    {
        if(Session::get('admin'))
        {

            $admin = Admin::get();

            // dd($admin);

            return view('admin.dashboard.profile', compact('admin'));
        }
        else
        {
            return Redirect::to('/admin/');
        }
        
    }

    public function reset_password(Request $request)
    {
        if(Session::get('admin') )
        {

            if($_POST)
            {

                $cpass      = $request->cpass;
                $npass      = $request->npass;
                $cnpass     = $request->cnpass;

                $email   = Session::get('admin_email');
                $id   = Session::get('admin_id');
                $admin = Admin::where('email', '=', $email)->first();


                if($npass != $cnpass)
                {
                    return redirect('admin/reset-password')->withErrors(['New password and Confirm password are not same.']);
                }
                else if (!Hash::check($cpass, $admin->password)) 
                {
                   return redirect('admin/reset-password')->withErrors(['Current password is not matched']);
                }
                else
                {
                    $enc_pass = app('hash')->make($npass);
                    
                    $pass=DB::table('admin')->where('id',$id)->limit(1);
                    $pass->update(['password'=>$enc_pass]);


                    return redirect('admin/reset-password')->with('alert-success', 'Password has changed successfully.');

                }

            }
            else
            {
                return view('admin.dashboard.reset_password');       
            }
        }
        else
        {
            return Redirect::to('/admin/');

        }


    }

    public function logout()
    {

        Session::flush(); // removes all session data

        return Redirect::to('/admin/');

    }

    public function forgot_password(Request $request)
    {
        if(Session::get('admin') )
        {
            $admin = Admin::get();

            return view('admin.dashboard.index', compact('admin'));
        }
        else
        {
            if($_POST)
            {
                $email = $request->email;


                $otp = mt_rand(100000, 999999);

                $data = array('otp' => $otp, 'email' => $request->email );

                Mail::send('admin.emails.forgot_password',$data, function ($message) {
                    $message->from('admin@syncredit.com','Micro finance');
                    $message->to('pratik.dhotmal@qualitasit.com');
                    $message->subject('Reset password for admin on micro finance.');
                });

                $pass=DB::table('admin')->where('email',$email)->limit(1);
                $pass->update(['otp'=>$otp]);


                Session::put(array
                                    ( 
                                        'email_reset'   => $email
                                    )
                            );


                return redirect('admin/enter-otp')->with('alert-success', 'Please enter OTP which sends on your email(If Exist)');
            }
            else
            {
                return view('admin.forgot_password.index');
            }
        }
    }

    public function enter_otp(Request $request)
    {
        if($_POST)
        {
            // $id = $request->id;
            $otp = $request->otp;

            $email = Session::get('email_reset');

            $admin = Admin::where('email', '=', $email)->first();

            $saved_otp = $admin->otp;

            if($saved_otp == $otp)
            {
                return redirect('admin/change-password');
            }
            else
            {
                // return redirect('admin/enter-otp')->with('alert-success', 'Please enter OTP which sends on your email(If Exist)');
                return redirect('admin/enter-otp')->withErrors(['Entered OTP is wrong']);

            }

            // dd($admin->otp);

        }
        else
        {
            return view('admin.forgot_password.otp');
        }
    }

    public function change_password(Request $request)
    {
        if($_POST)
        {
            // dd($request->cnpass);

            $npass = $request->npass;
            $cnpass = $request->cnpass;

            $email = Session::get('email_reset');




            if($npass != $cnpass)
            {
                return redirect('admin/change-password')->withErrors(['New password and Confirm password are not same.']);
            }
            else
            {
                $enc_pass = app('hash')->make($npass);
                
                $pass=DB::table('admin')->where('email',$email)->limit(1);
                $pass->update(['password'=>$enc_pass]);


                return redirect('admin/')->with('alert-success', 'Password has changed successfully.');
            }

        }
        else
        {
            return view('admin.forgot_password.change_password');
        }
    }
}