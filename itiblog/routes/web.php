<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





// 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// Route::resource('posts',PostController::class)->middleware('auth');
Route::resource('posts',PostController::class);

Route::resource('users',UserController::class); // index, create, 
Route::get('/user/{user}/posts', [UserController::class, "getPosts"])->name('user.posts');


// Route::get('/user/{user}/posts', function ($user) {
//     return $user;
// })->name('user.posts');

// Route::get('/user/{user}/posts', [UserController::class, "getPosts"])->name("user.posts");

Route::get('/authgate', function () {
        return view('posts.authgate');
    });
