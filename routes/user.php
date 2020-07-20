<?php

use Illuminate\Support\Facades\Route;

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

//Route::get("/category/{category:slug}", "HomeController@category")->name("category");

//Route::get("/product/{product:slug}", "HomeController@product");

Route::get("/blog/{blog:slug}", "HomeController@product");

//Route::get('/', 'HomeController@index');

Route::get("/shop/{category:slug}", "HomeController@shop");

Route::get("/product/{product:slug}", "HomeController@productdetail");

Route::get("/about", "HomeController@about");

Route::get("/blog","HomeController@blog");
Route::get("/blog/{blog:slug}","HomeController@blogdetail");
Route::post("/blog/comment","HomeController@saveComment");

Route::get("/shop","HomeController@shop");

Route::get("/product-detail","HomeController@productdetail");

Route::get("/contact","HomeController@contact");

Route::get("/programcategory","HomeController@programcategory");

Route::get("/program","HomeController@program");

Route::get("/programs-detail","HomeController@programs_detail");

Route::post("/cart/add/{product}", "HomeController@addToCart");

Route::get("/shopping-cart","HomeController@shoppingCart");

Route::get("/checkout","HomeController@checkout")->middleware("auth");

Route::post("/checkout","HomeController@placeOrder")->middleware("auth");

Route::get("/view-user/{id}","UserController@viewUser1")->middleware("auth");
Route::put("/update-user/{id}", "UserController@updateUser1")->middleware("auth");
