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
    Route::get('/', 'HomeController@index');
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

Route::get('/qr-code', function () {
    $qrcode = new Generator;
    $code = "I love you me Min";
    $bcrypt = bcrypt($code);
    return $qrcode->size(200)->generate($bcrypt);
});

Route::get('/qr-code', function () {
    $qrcode = new Generator;
    $code = "I love you me Min";
    $bcrypt = md5($code);
    return $qrcode->size(200)->generate($bcrypt);
});
Route::get('/qr-code1', function () {
    $qrcode = new Generator;
    $code = '80d4c648c083bca2a51d0aeac5f1bff9';
    $bcrypt = md5($code);
    return $qrcode->size(200)->generate($bcrypt);
});
require_once "userwithoutlogin.php";
//Route::get('/onepay',"VNPayController@createonepay");
//Route::get('/thanhtoan',"VNPayController@returnonepay");

