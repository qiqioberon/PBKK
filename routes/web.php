<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form_get', function () {
    return view('FormGet');
});

Route::get('/calc', function () {
    return view('SimpleCalc');
});

use Illuminate\Http\Request;

Route::get('/bmi', function () {
    return view('bmiCalc');
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

    return view('bmiResult', ['bmi' => $bmi, 'category' => $category]);
});
