<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pertemuan1\FormController;

Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form', [FormController::class, 'handleForm'])->name('form.handle');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form_get', function () {
    return view('FormGet');
});


Route::get('/form_post', function () {
    return view('FormPost');
});


Route::get('/kalkulator', function () {
    return view('Pertemuan2.Kalkulator.kalkulator');
});
