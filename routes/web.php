<?php

require __DIR__ . '/pertemuan1.php';
require __DIR__ . '/pertemuan2.php';
require __DIR__ . '/pertemuan3.php';

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('test', function () {
    return view('test');
});
