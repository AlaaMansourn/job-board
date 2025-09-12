<?php



// use App\Http\Controllers\PostController;
// use App\Http\Controllers\CommentController;
// use App\Http\Controllers\TagController;
// use App\Models\Post;

use App\Http\Controllers\api\v1\PostApiController;
use Illuminate\Support\Facades\Route;




Route::prefix('v1')->group(function(){

Route::apiResource("blog",PostApiController::class);



});

// Route::post("/blog",[PostController::class,"create"]);
// Route::delete("/blog/{id}",[PostController::class,"delete"]);


// Route::post("/tag",[TagController::class,"create"]);
// Route::delete("/tag/{id}",[TagController::class,"delete"]);


// Route::post("/comment",[CommentController::class,"create"]);




