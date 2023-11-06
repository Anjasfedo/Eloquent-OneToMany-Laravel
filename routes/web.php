<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', \App\Http\Controllers\HomeController::class);

Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::resource('/comments', CommentController::class)->except('create');
Route::get('comments/create/{id}', [CommentController::class, 'create'])->name('comments.create');