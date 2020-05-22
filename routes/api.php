<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('user/login','api\users\LoginController@index');
Route::post('user/registration/get-otp','api\users\RegistrationController@get_otp');
Route::post('user/registration/get-otp-sms','api\users\RegistrationController@get_otp_sms');
Route::post('user/registration/check-otp','api\users\RegistrationController@check_otp');

Route::get('user/dashboard/personal-info/{id}','api\users\DashboardController@personal_info');
Route::get('user/dashboard/employement-info/{id}','api\users\DashboardController@employement_info');
Route::get('user/dashboard/reference-info/{id}','api\users\DashboardController@reference_info');
Route::get('user/dashboard/bank-info/{id}','api\users\DashboardController@bank_info');
Route::post('user/dashboard/reset-password','api\users\ProfileController@reset_password');
// Route::get('user/dashboard/my-account/{id}','api\users\DashboardController@my_account');


Route::post('user/account/add-personal-info','api\users\PersonalInfoController@add');
Route::post('user/account/add-employment-info','api\users\EmploymentInfoController@add');
Route::post('user/account/add-reference-info','api\users\ReferenceInfoController@add');
Route::post('user/account/add-bank-info','api\users\BankInfoController@add');

Route::post('user/membership-reg','api\users\MembershipRegController@add');

Route::post('user/add-loan-info','api\users\LoanController@add');
Route::get('user/show-loan-info/{id}','api\users\LoanController@show_');

Route::get('user/show-account-info/{id}','api\users\DashboardController@account_info');



Route::post('user/forgot-password/get-otp','api\users\RegistrationController@forgot_password');
Route::post('user/forgot-password/check-otp','api\users\RegistrationController@check_otp');
Route::post('user/forgot-password/reset-password','api\users\RegistrationController@reset_password');