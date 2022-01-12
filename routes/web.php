<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/dashboard/{post}/likes', [PostLikeController::class, 'store'])->name('dashboard.likes');
Route::delete('/dashboard/{post}/likes', [PostLikeController::class, 'destroy'])->name('dashboard.likes');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/create-post', [PostController::class, 'index'])->name('create-post');
Route::post('/create-post', [PostController::class, 'store']);
Route::delete('/dashboard/{post}', [PostController::class, 'destroy'])->name('dashboard-delete');

Route::get('/', function () {
    return view('posts.index');
})->name('home');
