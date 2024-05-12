<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User routes
Route::resource('users', UserController::class);

// Product routes
Route::resource('products', ProductController::class);

// Order routes
Route::resource('orders', OrderController::class);

// Transaction routes
Route::resource('transactions', TransactionController::class);

// Report routes
Route::resource('reports', ReportController::class);
