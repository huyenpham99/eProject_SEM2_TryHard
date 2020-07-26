<?php

use Illuminate\Support\Facades\Route;

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

//Route::get("/category/{category:slug}", "HomeController@category")->name("category");

//Route::get("/product/{product:slug}", "HomeController@product");

//Route::get("/blog/{blog:slug}", "HomeController@product");

//Route::get('/', 'HomeController@index');

Route::get("/shop/{category:slug}", "HomeController@shop");

Route::get("/product/{product:slug}", "HomeController@productdetail");

Route::get("/about", "HomeController@about");

Route::get("/blog","HomeController@blog");
Route::get("/blog/{blog:slug}","HomeController@blogdetail");
Route::post("/blog/comment","HomeController@saveComment");

Route::get("/shop","HomeController@allShop");

Route::get("/product-detail","HomeController@productdetail");

Route::get("/contact","HomeController@contact");

Route::get("/programcategory","HomeController@programcategory");

Route::get("/program/{id}","HomeController@program");

Route::get("/programdetail/{id}","HomeController@programs_detail");

Route::post("/cart/add/{product}", "HomeController@addToCart");

Route::get("/shopping-cart","HomeController@shoppingCart");

Route::get("/checkout","HomeController@checkout")->middleware("auth");

Route::post("/checkout","HomeController@placeOrder")->middleware("auth");

Route::get("/view-user/{id}","UserController@viewUser1")->middleware("auth");
Route::put("/update-user/{id}", "UserController@updateUser1")->middleware("auth");
Route::post("/cancel-order/{id}","OrderController@cancelOrder")->middleware("auth");
//Route::get("/vn-pay","VNPayController@createPayment")->middleware("auth");
Route::get("/return-vnpay","VNPayController@return")->middleware("auth");
Route::get("/return-donate","VNPayController@return1")->middleware("auth");
Route::get('/donate/{donate:slug}',"DonateController@donateDetail");
Route::get('/donate',"DonateController@donate");
Route::post("/update-money/{id}","DonateController@saveMoney");

Route::get("/event", "EventController@listEventFrontEnd");
Route::get("/event/{event:slug}", "EventController@eventDetails");
Route::get("/create-ticket-buyer", "EventController@createTicketBuyer");
