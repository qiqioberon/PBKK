<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pertemuan3\ImageUploadController;


Route::get('/imageinput', [ImageUploadController::class, 'showForm'])->name('input.form');
Route::post('/imageinput', [ImageUploadController::class, 'upload'])->name('input.image');
Route::get('/imageoutput', [ImageUploadController::class, 'showImage'])->name('output.image');
