<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\SaleController;
use App\Http\Middleware\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/category/product/',[ProductController::class, 'getCategoryProducts'])->withoutMiddleware([Authentication::class]);
Route::get('/product/{idProduct}',[ProductController::class, 'getProductId'])->withoutMiddleware([Authentication::class]);
Route::get('/promotion',[PromotionController::class, 'getPromotions'])->withoutMiddleware([Authentication::class]);
Route::get('/favorite/product',[FavoriteController::class, 'favoriteProducts']);

Route::post('/login',[AuthController::class, 'login'])->withoutMiddleware([Authentication::class]);
Route::post('/logout',[AuthController::class, 'logout']);
Route::get('/verification',[AuthController::class, 'verification']);
Route::get('/user',[AuthController::class, 'getUser']);

Route::post('/wishlist/{idProduct}', [SaleController::class, 'storeWishlist']);
Route::get('/wishlist', [SaleController::class, 'listWishlist']);