<?php
Route::get("/admin","WebController@dashboard");

//CategoryRepository Router
Route::get("/list-category","CategoryController@listCategory");
Route::get("/new-category","CategoryController@newCategory");
Route::post("/save-category","CategoryController@saveCategory");
Route::get("/edit-category/{id}","CategoryController@editCategory");
Route::put("/update-category/{id}","CategoryController@updateCategory");
Route::delete("/delete-category/{id}","CategoryController@deleteCategory");

//Products Router
Route::get("/list-product","ProductController@listProduct");
Route::get("/new-product","ProductController@newProduct");
Route::post("/save-product","ProductController@saveProduct");
Route::get("/edit-product/{id}","ProductController@editProduct");
Route::put("/update-product/{id}","ProductController@updateProduct");
Route::delete("/delete-product/{id}","ProductController@deleteProduct");

//Blog Router
Route::get("/list-blog","BlogController@listBlog");
Route::get("/new-blog","BlogController@newBlog");
Route::post("/save-blog","BlogController@saveBlog");
Route::get("/edit-blog/{id}","BlogController@editBlog");
Route::put("/update-blog/{id}","BlogController@updateBlog");
Route::delete("/delete-blog/{id}","BlogController@deleteBlog");

//User Router
Route::get("/list-user", "UserController@listUser")->middleware('admin1');
Route::get("/new-manager", "UserController@newManager")->middleware('admin1');
Route::post("/save-manager", "UserController@saveManager")->middleware('admin1');

Route::put("/update-access/{id}","UserController@updateAccess")->middleware('admin1');
Route::get("/edit-user/{id}", "UserController@editUser")->middleware('admin1');
Route::put("/update-user/{id}", "UserController@updateUser")->middleware('admin1');
Route::get("/view-user/{id}","UserController@viewUser")->middleware('admin1');
