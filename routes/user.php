<?php

use Illuminate\Support\Facades\Route;

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

//Route::get("/category/{category:slug}", "HomeController@category")->name("category");

//Route::get("/product/{product:slug}", "HomeController@product");

//Route::get("/blog/{blog:slug}", "HomeController@product");

//Route::get('/', 'HomeController@index');

Route::get("/shop/{category:slug}", "HomeController@shop");

Route::get("/product/{product:slug}", "HomeController@product");

Route::get("/about", "HomeController@about");

Route::get("/blog","HomeController@blog");
Route::get("/blog/{blog:slug}","HomeController@blogdetail");

Route::get("/shop","HomeController@shop");

Route::get("/product-detail","HomeController@productdetail");

Route::get("/contact","HomeController@contact");

Route::get("/programs","HomeController@programs");

Route::get("/programs-detail","HomeController@programs_detail");

Route::post("/cart/add/{product}", "HomeController@addToCart");

Route::get("/shopping-cart","HomeController@shoppingCart");

Route::get("/checkout","HomeController@checkout")->middleware("auth");

Route::post("/checkout","HomeController@placeOrder")->middleware("auth");
