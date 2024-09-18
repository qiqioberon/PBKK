<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pertemuan1\FormController;


Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form', [FormController::class, 'handleForm'])->name('form.handle');
