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
// Router index login..

Auth::routes();

Route::group(["middleware"=>["deadactive","auth"]],function(){
    require_once "user.php";
});
Route::group(["middleware"=>["deadactive","admin","auth"], "prefix"=>"admin"],function(){
    require_once "admin.php";
});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('reset-password', 'ResetPasswordController@sendMail');
Route::put('reset-password/{token}', 'ResetPasswordController@reset');
Route::get("/change-password","ChangePasswordController@change");
Route::post("/change-password","ChangePasswordController@postCredentials");

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');



