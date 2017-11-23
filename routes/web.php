<?php

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

//admin login route
Route::get('/admin', 'Auth\LoginController@showLoginForm');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'admin\Usercontroller');
    Route::get('user/get-data', 'admin\UserController@getData')->name('user-data');
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
