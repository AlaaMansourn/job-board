<?php

use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class,"index"]);
Route::get('/about', AboutController::class);
Route::get('/contact',[IndexController::class,"contact"]);
Route::get("/job",[JobController::class,"index"]);


Route::resource("/blog",PostController::class)->except(['destroy']);
Route::resource("/comment",CommentController::class);
Route::resource("/tag",TagController::class);




// Route::get("/blog",[PostController::class,"index"]);

// Route::get("/blog/{id}",[PostController::class,"show"]);


// Route::get("/comment",[CommentController::class,"index"]);

// Route::get("/comment/{id}",[CommentController::class,"show"]);


// Route::get("/tag",[TagController::class,"index"]);
// //
// Route::get("/tag/{id}",[TagController::class,"show"]);



Route::get("/test/many-many",[TagController::class,"testManyToMany"]);


