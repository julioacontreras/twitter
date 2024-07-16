<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;


Route::get('/post', [PostController::class, 'getPosts']);
Route::get('/post/{id}', [PostController::class, 'getPost']);
Route::post('/post', [PostController::class, 'createPost']);
Route::put('/post/like/{id}', [PostController::class, 'like']);

Route::post('/comment', [CommentController::class, 'createComment']);
