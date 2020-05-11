<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Users;


class DashboardController extends Controller
{
	public function login()
	{
		return view('admin.login.index');		
	}

    public function show()
    {
    	$users = Users::get();

    	// dd($users);

        return view('admin.dashboard.index', compact('users'));
    }
}