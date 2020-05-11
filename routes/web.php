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

Route::get('/admin', 'Admin\DashboardController@login');
Route::get('/admin/dashboard', 'Admin\DashboardController@show');
Route::get('/admin/users', 'Admin\UserController@show');
Route::get('/admin/add-user', 'Admin\UserController@add');
Route::post('/admin/insert-user', 'Admin\UserController@insert');
Route::get('/admin/edit-user/{id}', 'Admin\UserController@edit');
Route::post('/admin/update-user', 'Admin\UserController@update');
// Route::post('/admin/delete-user', 'Admin\UserController@delete');
Route::get('/admin/delete-user/{id}', 'Admin\UserController@delete');
Route::delete('/admin/delete-user/{id}', 'Admin\UserController@delete')->name('delete.user');
