<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/post', [PostController::class, 'getPosts']);
Route::get('/post/{id}', [PostController::class, 'getPost']);
Route::post('/post', [PostController::class, 'createPost']);
Route::put('/post/like/{id}', [PostController::class, 'like']);
