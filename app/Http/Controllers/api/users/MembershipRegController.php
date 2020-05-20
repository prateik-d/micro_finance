<?php

namespace App\Http\Controllers\api\users;

use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Users;
use App\Models\MembershipRecord;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
use Response;

use Hash;



class MembershipRegController extends Controller
{

	public function __construct()
    {

    }

    public function add(Request $request)
    {

    	if($_POST)
    	{

            $membership_record = new MembershipRecord;

            $membership_record->user_id     = $request->user_id;
            $membership_record->name        = $request->name;
            $membership_record->duration    = $request->duration;
            $membership_record->amount      = $request->amount;

            $membership_record->save();

            return $membership_record;    		
    	}
    	else
    	{
    		return 0;
    	}
    }
}