<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pertemuan1\FormController;
use Illuminate\Http\Request;
use App\Http\Controllers\Pertemuan2\ControllerKalkulator7;


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


Route::get('/kalkulator7', function () {
    return view('Pertemuan2.Kalkulator.kalkulator7');
});
Route::post('/kalkulator7', [ControllerKalkulator7::class, 'handleForm'])->name('kalkulator7.handle');

Route::get('/kalkulator6', function () {
    return view('Pertemuan2.Kalkulator.kalkulator6');
});

Route::get('/kalkulator5', function () {
    return view('Pertemuan2.Kalkulator.kalkulator5');
});

Route::post('/kalkulator5', function (Request $request) {
    $hasil = $request->answer;

    $hasil = eval('return ' . $hasil . ';');
    return view('Pertemuan2.Kalkulator.kalkulator5', [
        'hasil' => $hasil
    ]);
});
