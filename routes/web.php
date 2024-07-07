<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

//route dashboard
use App\Http\Controllers\Backend_C\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index']);
