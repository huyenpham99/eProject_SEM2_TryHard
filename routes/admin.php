<?php
Route::get("/","WebController@dashboard");
//

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




//Event Router
Route::get("/list-event","EventController@listEvent");
Route::get("/new-event","EventController@newEvent");
Route::post("/save-event","EventController@saveEvent");
Route::get("/edit-event/{id}","EventController@editEvent");
Route::put("/update-event/{id}","EventController@updateEvent");
Route::delete("/delete-event/{id}","EventController@deleteEvent");

Route::get("/list-user", "UserController@listUser")->middleware('admin1');
Route::get("/new-manager", "UserController@newManager")->middleware('admin1');
Route::post("/save-manager", "UserController@saveManager")->middleware('admin1');

Route::put("/update-access/{id}","UserController@updateAccess")->middleware('admin1');
Route::get("/edit-user/{id}", "UserController@editUser")->middleware('admin1');
Route::put("/update-user/{id}", "UserController@updateUser")->middleware('admin1');
Route::get("/view-user/{id}","UserController@viewUser")->middleware('admin1');


//Banner
Route::get("/list-banner","BannerController@listBanner");
Route::get("/new-banner","BannerController@newBanner");
Route::post("/save-banner","BannerController@saveBanner");
Route::get("/edit-banner/{id}","BannerController@editBanner");
Route::put("/update-banner/{id}","BannerController@updateBanner");
Route::delete("/delete-banner/{id}","BannerController@deleteBanner");



//Program Detail
Route::get("/list-program-detail","ProgramDetailController@listProgram_Detail");
Route::get("/new-program-detail","ProgramDetailController@newProgram_Detail");
Route::post("/save-program-detail","ProgramDetailController@saveProgram_Detail");
Route::get("/edit-program-detail/{id}","ProgramDetailControllerr@editProgram_Detail");
Route::put("/update-program-detail/{id}","ProgramDetailController@updateProgram_Detail");
Route::delete("/delete-program-detail/{id}","ProgramDetailController@deleteProgram_Detail");

