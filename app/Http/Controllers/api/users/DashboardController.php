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



class DashboardController extends Controller
{

	public function __construct()
    {

    }

    public function personal_info($id)
    {
		$user = Users::where('id', '=', $id)->first();

		if (!$user) 
		{
		 
		 	return array
                            (
                                'status'      => 0, 
                                'message'    => 'Login Fail, Please check credential'
                            );
		}
		else
		{

			return array
                    (
                        'user_id'               => $user->id, 
                        'user_name'             => $user->name, 
                        'user_email'            => $user->email,
                        'user_phone'            => $user->phone,
                        'user_education'        => $user->education,
                        'user_dob'              => $user->dob,
                        'user_marital_status'   => $user->marital_status,
                        'user_selfie'           => $user->selfie,
                        'user_aadhar_card'      => $user->aadhar_card,
                        'user_pan_card'         => $user->pan_card,
                        'status'	            => '1',
                        'message'               => 'Data fetch successful'
                    );
		}
    }

    public function employement_info($id)
    {
        $user = Users::where('id', '=', $id)->first();

        if (!$user) 
        {
         
            return array
                            (
                                'status'      => 0, 
                                'message'    => 'Login Fail, Please check credential'
                            );
        }
        else
        {

            return array
                    (
                        'user_id'               => $user->id, 
                        'user_name'             => $user->name, 
                        'user_email'            => $user->email,
                        'user_emp_type'         => $user->emp_type,
                        'user_monthly_income'   => $user->monthly_income,
                        'user_working_since'    => $user->working_since,
                        'user_company_name'     => $user->company_name,
                        'user_company_address'   => $user->company_address,
                        'user_company_phone'    => $user->company_phone,
                        'status'                => '1',
                        'message'               => 'Data fetch successful'
                    );
        }
    }

    public function reference_info($id)
    {
        $user = Users::where('id', '=', $id)->first();

        if (!$user) 
        {
         
            return array
                            (
                                'status'      => 0, 
                                'message'    => 'Login Fail, Please check credential'
                            );
        }
        else
        {

            return array
                    (
                        'user_id'                       => $user->id, 
                        'user_name'                     => $user->name, 
                        'user_email'                    => $user->email,
                        'user_ref1_name'                => $user->ref1_name,
                        'user_ref1_phone'               => $user->ref1_phone,
                        'user_ref1_address'             => $user->ref1_address,
                        'user_ref2_name'                => $user->ref2_name,
                        'user_ref2_phone'               => $user->ref2_phone,
                        'user_ref2_address'             => $user->ref2_address,
                        'user_urgent_contact_name'      => $user->urgent_contact_name,
                        'user_urgent_contact_phone'     => $user->urgent_contact_phone,
                        'user_urgent_contact_address'   => $user->urgent_contact_address,
                        'status'                        => '1',
                        'message'                       => 'Data fetch successful'
                    );
        }
    }

    public function bank_info($id)
    {
        $user = Users::where('id', '=', $id)->first();

        if (!$user) 
        {
         
            return array
                            (
                                'status'      => 0, 
                                'message'    => 'Login Fail, Please check credential'
                            );
        }
        else
        {

            return array
                    (
                        'user_id'                   => $user->id, 
                        'user_name'                 => $user->name, 
                        'user_email'                => $user->email,
                        'user_bank_name'            => $user->bank_name,
                        'user_bank_branch'          => $user->bank_branch,
                        'user_bank_address'         => $user->bank_address,
                        'user_account_number'       => $user->account_number,
                        'user_bank_account_name'    => $user->bank_account_name,
                        'user_bank_account_type'    => $user->bank_account_type,
                        'user_ifsc'                 => $user->ifsc,
                        'status'                    => '1',
                        'message'                   => 'Data fetch successful'
                    );
        }
    }

}