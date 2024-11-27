<?php

use App\Http\Controllers\Onlineshop\CartController;
use App\Http\Controllers\Onlineshop\OnlineShop;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddProductController;



Route::post('/product', [AddProductController::class, 'store'])->name('product.store')->middleware('auth');
Route::get('/online-shop', OnlineShop::class . '@allProducts')->name('onlineshop.allproducts')->middleware('auth');
Route::post('/online-shop', [OnlineShop::class, 'handleShowCart'])->middleware('auth');
Route::get('/add-products', [OnlineShop::class, 'addProductsToDatabase']);
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->middleware('auth');
Route::get('/get-cart', [CartController::class, 'getCart'])->middleware('auth');
Route::post('/update-cart', [CartController::class, 'updateCart'])->middleware('auth');
