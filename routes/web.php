<?php

use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Generator;
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


Route::post('reset-password', 'ResetPasswordController@sendMail');
Route::put('reset-password/{token}', 'ResetPasswordController@reset');
Route::get("/change-password","ChangePasswordController@change");
Route::post("/change-password","ChangePasswordController@postCredentials");

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Route::get('/404', 'HomeController@Error');

Route::get('/search', 'HomeController@searchHome');
Route::get('/searchselected', 'HomeController@searchSelected');
Route::post("/send-form","WebController@contactForm");

Route::get('/qr-code', function () {
    $qrcode = new Generator;
    $code = "I love you me Min";
//    $bcrypt = bcrypt($code);
//    $hash = \Illuminate\Support\Facades\Hash::check($code, $bcrypt);
//    var_dump($hash);
    return $qrcode->size(200)->generate($code);
});
require_once "userwithoutlogin.php";



