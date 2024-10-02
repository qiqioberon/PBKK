<?php

use App\Http\Controllers\Onlineshop\OnlineShop;
use Illuminate\Support\Facades\Route;

Route::get('/online-shop', OnlineShop::class . '@allProducts')->name('onlineshop.allproducts');
Route::post('/online-shop', [OnlineShop::class, 'handleShowCart']);