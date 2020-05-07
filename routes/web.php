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

// Route::get('/admin/dashboard', function () {
//     return view('admin/dashboard/index');
// });

Route::get('/admin/dashboard', 'Admin\DashboardController@show');
Route::get('/admin/users', 'Admin\UserController@show');
Route::get('/admin/add-user', 'Admin\UserController@add');
Route::post('/admin/insert-user', 'Admin\UserController@insert');