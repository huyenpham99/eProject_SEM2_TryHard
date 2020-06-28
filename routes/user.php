<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

Route::get("/category/{category:slug}", "HomeController@category")->name("category");

Route::get("/product/{product:slug}", "HomeController@product");

Route::get("/about", "HomeController@about");

Route::get("/blog","HomeController@blog");
