<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mhs', MhsController::class);

Route::get('/mhs', [MhsController::class, 'index'])->name('mhs.index');
