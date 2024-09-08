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