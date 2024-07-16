<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('home/index');
});

Route::get('/post', function () {
    return Inertia::render('post/index');
});
