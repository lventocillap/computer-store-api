<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Middleware\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/category/product/{idCategory}',[ProductController::class, 'getCategoryProducts'])->withoutMiddleware([Authentication::class]);
Route::get('/product/{idProduct}',[ProductController::class, 'getProductId']);
Route::get('/favorite/product',[FavoriteController::class, 'favoriteProducts']);
Route::get('/promotion',[PromotionController::class, 'getPromotions'])->withoutMiddleware([Authentication::class]);

Route::post('/login',[AuthController::class, 'login'])->withoutMiddleware([Authentication::class]);
Route::post('/logout',[AuthController::class, 'logout']);