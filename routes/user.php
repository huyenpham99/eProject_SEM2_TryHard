<?php

use Illuminate\Support\Facades\Route;

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

//Route::get("/category/{category:slug}", "HomeController@category")->name("category");

//Route::get("/product/{product:slug}", "HomeController@product");

//Route::get("/blog/{blog:slug}", "HomeController@product");

//Route::get('/', 'HomeController@index');

Route::get("/checkout","HomeController@checkout")->middleware("auth");

Route::post("/checkout","HomeController@placeOrder")->middleware("auth");

Route::get("/view-user/{id}","UserController@viewUser1")->middleware("auth");
Route::put("/update-user/{id}", "UserController@updateUser1")->middleware("auth");
Route::post("/cancel-order/{id}","OrderController@cancelOrder")->middleware("auth");
//Route::get("/vn-pay","VNPayController@createPayment")->middleware("auth");
Route::get("/return-vnpay","VNPayController@return")->middleware("auth");
Route::get("/return-donate","VNPayController@return1")->middleware("auth");
