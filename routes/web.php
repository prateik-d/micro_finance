<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('admin/dashboard/index');
// });


Route::group(['prefix' => 'admin'], function ($router) {
    
	Route::get('/', 'Admin\DashboardController@login');
	Route::post('login', 'Admin\DashboardController@login');
    
	Route::get('dashboard', 'Admin\DashboardController@show');
	Route::get('users', 'Admin\UserController@show');
	Route::get('add-user', 'Admin\UserController@add');
	Route::post('insert-user', 'Admin\UserController@insert');
	Route::get('edit-user/{id}', 'Admin\UserController@edit');
	Route::post('update-user', 'Admin\UserController@update');
	Route::delete('delete-user/{id}', 'Admin\UserController@delete')->name('delete.user');

	Route::get('user-profile', 'Admin\DashboardController@profile');
	Route::get('reset-password', 'Admin\DashboardController@reset_password');
	Route::post('reset-password', 'Admin\DashboardController@reset_password');
	Route::get('logout', 'Admin\DashboardController@logout');
	
	Route::get('forgot-password', 'Admin\DashboardController@forgot_password');
	Route::post('forgot-password', 'Admin\DashboardController@forgot_password');

	Route::get('enter-otp', 'Admin\DashboardController@enter_otp');
	Route::post('enter-otp', 'Admin\DashboardController@enter_otp');

	Route::get('change-password', 'Admin\DashboardController@change_password');
	Route::post('change-password', 'Admin\DashboardController@change_password');

});
