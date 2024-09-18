<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Pertemuan2\ControllerKalkulator7;

Route::get('/form_get', function () {
    return view('Pertemuan2.rakha.FormGet');
});


Route::get('/calc', function () {
    return view('Pertemuan2.rakha.SimpleCalc');
});



Route::get('/bmi', function () {
    return view('Pertemuan2.rakha.bmiCalc');
});

Route::post('/calculate-bmi', function (Request $request) {
    $weight = $request->input('weight'); // berat badan
    $height = $request->input('height'); // tinggi badan dalam cm

    // Menghitung BMI
    $bmi = $weight / (($height / 100) ** 2);

    // Menentukan kategori BMI
    if ($bmi < 18.5) {
        $category = 'Underweight';
    } elseif ($bmi < 24.9) {
        $category = 'Normal weight';
    } elseif ($bmi < 29.9) {
        $category = 'Overweight';
    } else {
        $category = 'Obesity';
    }

    return view('Pertemuan2.rakha.bmiResult', ['bmi' => $bmi, 'category' => $category]);
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
