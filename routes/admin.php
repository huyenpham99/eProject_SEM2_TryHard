<?php
Route::get("/","WebController@dashboard");
//

//CategoryRepository Router
Route::get("/list-category","CategoryController@listCategory")->middleware('product');
Route::get("/new-category","CategoryController@newCategory")->middleware('product');
Route::post("/save-category","CategoryController@saveCategory")->middleware('product');
Route::get("/edit-category/{id}","CategoryController@editCategory")->middleware('product');
Route::put("/update-category/{id}","CategoryController@updateCategory")->middleware('product');
Route::delete("/delete-category/{id}","CategoryController@deleteCategory")->middleware('product');

//Products Router
Route::get("/list-product","ProductController@listProduct")->middleware('product');
Route::get("/new-product","ProductController@newProduct")->middleware('product');
Route::post("/save-product","ProductController@saveProduct")->middleware('product');
Route::get("/edit-product/{id}","ProductController@editProduct")->middleware('product');
Route::put("/update-product/{id}","ProductController@updateProduct")->middleware('product');
Route::delete("/delete-product/{id}","ProductController@deleteProduct")->middleware('product');

//Blog Router
Route::get("/list-blogcategory","BlogCategoryController@listBlogCategory")->middleware('blog');
Route::get("/new-blogcategory","BlogCategoryController@newBlogCategory")->middleware('blog');
Route::post("/save-blogcategory","BlogCategoryController@saveBlogCategory")->middleware('blog');
Route::get("/edit-blogcategory/{id}","BlogCategoryController@editBlogCategory")->middleware('blog');
Route::put("/update-blogcategory/{id}","BlogCategoryController@updateBlogCategory")->middleware('blog');
Route::delete("/delete-blogcategory/{id}","BlogCategoryController@deleteBlogCategory")->middleware('blog');
Route::get("/list-comment","CommentController@commentList")->middleware('blog');
Route::get("/edit-comment/{id}","CommentController@editComment")->middleware('blog');
Route::put("/update-comment/{id}","CommentController@saveComment")->middleware('blog');

Route::get("/list-blog","BlogController@listBlog")->middleware('blog');
Route::get("/new-blog","BlogController@newBlog")->middleware('blog');
Route::post("/save-blog","BlogController@saveBlog")->middleware('blog');
Route::get("/edit-blog/{id}","BlogController@editBlog")->middleware('blog');
Route::put("/update-blog/{id}","BlogController@updateBlog")->middleware('blog');
Route::delete("/delete-blog/{id}","BlogController@deleteBlog")->middleware('blog');

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

//Program Router
Route::get("/list-programcategory","ProgramCategoryController@listProgramCategory");
Route::get("/new-programcategory","ProgramCategoryController@newProgramCategory");
Route::post("/save-programcategory","ProgramCategoryController@saveProgramCategory");
Route::get("/edit-programcategory/{id}","ProgramCategoryController@editProgramCategory");
Route::put("/update-programcategory/{id}","ProgramCategoryController@updateProgramCategory");
Route::delete("/delete-programcategory/{id}","ProgramCategoryController@deleteProgramCategory");


//Event Router
Route::get("/list-event","EventController@listEvent")->middleware('event');
Route::get("/new-event","EventController@newEvent")->middleware('event');
Route::post("/save-event","EventController@saveEvent")->middleware('event');
Route::get("/edit-event/{id}","EventController@editEvent")->middleware('event');
Route::put("/update-event/{id}","EventController@updateEvent")->middleware('event');
Route::delete("/delete-event/{id}","EventController@deleteEvent")->middleware('event');

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


// Program Detail
Route::get("/list-program-detail","ProgramDetailController@listProgramDetail")->middleware('program');
Route::get("/new-program-detail","ProgramDetailController@newProgramDetail")->middleware('program');
Route::post("/save-program-detail","ProgramDetailController@saveProgramDetail")->middleware('program');
Route::get("/edit-program-detail/{id}","ProgramDetailController@editProgramDetail")->middleware('program');
Route::put("/update-program-detail/{id}","ProgramDetailController@updateProgramDetail")->middleware('program');
Route::delete("/delete-program-detail/{id}","ProgramDetailController@deleteProgramDetail")->middleware('program');

// Ticket
Route::get("/list-ticket","TicketController@listTicket")->middleware('event');
Route::get("/new-ticket","TicketController@newTicket")->middleware('event');
Route::post("/save-ticket","TicketController@saveTicket")->middleware('event');
Route::get("/edit-ticket/{id}","TicketController@editTicket")->middleware('event');
Route::put("/update-ticket/{id}","TicketController@updateTicket")->middleware('event');
Route::delete("/delete-ticket/{id}","TicketController@deleteTicket")->middleware('event');


// ORDer
Route::get("/list-order","OrderController@listOrder");
Route::get("/edit-order/{id}","OrderController@editOrder");
Route::put("/update-order/{id}","OrderController@updateOrder");
Route::delete("/delete-order/{id}","OrderController@deleteOrder");


//product search
Route::get("/search/{value}", "ProductController@searchProduct");
//user search
Route::get("/searchUser/{value}", "UserController@searchUser");
