<?php
Route::get("/","WebController@dashboard");


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


//User Router
Route::get("/list-user", "UserController@listUser");
Route::get("/new-manager", "UserController@newManager");
Route::get("/save-manager", "UserController@saveManager");
//Program Router
Route::get("/list-program","ProgramController@listProgram");
Route::get("/new-program","ProgramController@newProgram");
Route::post("/save-program","ProgramController@saveProgram");
Route::get("/edit-program/{id}","ProgramController@editProgram");
Route::put("/update-program/{id}","ProgramController@updateProgram");
Route::delete("/delete-program/{id}","ProgramController@deleteProgram");
