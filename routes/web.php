<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homepage']);
Route::get('/show_details/{id}',[HomeController::class, 'show_details']);
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/show_post_user', [HomeController::class, 'show_post']);

Route::middleware(['auth', UserMiddleware::class])->group(function () {
    Route::get('/post_blade', [HomeController::class, 'post_page']);
    Route::post('/create_post', [AdminController::class, 'add_post']);
    
    Route::get('/destroy_post/{id}', [HomeController::class, 'delete_post']);
    Route::get('/edit_post/{id}', [HomeController::class, 'edit']);
    Route::post('/update_post/{id}', [HomeController::class, 'update']);
});

Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/post_page', [AdminController::class, 'post_page']);
    Route::post('/add_post', [AdminController::class, 'add_post']);
    Route::get('/show_post', [AdminController::class, 'show_post']);
    Route::get('/delete_post/{id}', [AdminController::class, 'delete_post']);
    Route::get('/detail/{id}', [AdminController::class, 'detail']);
    Route::get('/edit/{id}', [AdminController::class, 'edit']);
    Route::post('/update/{id}', [AdminController::class, 'update']);
});

