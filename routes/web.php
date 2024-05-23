<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


//home controller
Route::get('/', [HomeController::class,'index']);
Route::get('/home' ,[HomeController::class,'home']);

//about controller
Route::get('/about' , [AboutController::class,'about']);

//post controller
Route::get('/create',[PostController::class,'store']);
Route::get('/posts', [PostController::class, 'show']);
Route::get('/posts/{post}', function (Post $post) {
    return view('post', ['title' => 'Single Blog', 'post' => $post]);
});
Route::get('/create', [PostController::class, 'create_page']);
Route::get('/posts/{id}',[PostController::class,'read_more']);

//get id from url using route parameters

//Route::get('/posts/{id}', function ($id) {
//    return view('post', ['title' => 'Blog Single Post', 'post' => Post::find($id)]);
//});



//contact Controller
Route::get('/contact', [ContactController::class, 'contact_me']);
