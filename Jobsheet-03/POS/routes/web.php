<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// 1. Home
Route::get('/', [HomeController::class, 'index']);

// 2. Products (Route Prefix Category)
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// 3. User (Route Parameter)
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// 4. Penjualan
Route::get('/sales', [SalesController::class, 'index']);