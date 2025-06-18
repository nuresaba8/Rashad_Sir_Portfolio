<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/login', [AdminController::class, 'loginGet'])->name('admin.loginGet');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth:admin');

Route::get('/admin/logout', [AdminController::class, 'logout']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/experience', [HomeController::class, 'experience']);

Route::get('/articles', [HomeController::class, 'articles']);

Route::get('/contribution', [HomeController::class, 'contribution']);

Route::get('/tv_shows', [HomeController::class, 'tv_shows']);

Route::get('/news', [HomeController::class, 'news']);

Route::get('/international', [HomeController::class, 'international']);

Route::get('/awards', [HomeController::class, 'awards']);

Route::get('/contact', [HomeController::class, 'contact']);
