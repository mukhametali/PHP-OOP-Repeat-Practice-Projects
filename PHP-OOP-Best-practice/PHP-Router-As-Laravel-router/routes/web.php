<?php

use App\Http\Controllers\PostController;
use App\RMVC\Route\Route;

Route::get('/posts',[PostController::class, 'index'])->name('post.index')->middleware('auth');
Route::get('/posts/{post}/bla/{bla}',[PostController::class, 'show'])->name('post.show')->middleware('auth');

