<?php

use Illuminate\Support\Facades\Route;


Route::get('/imageinput', function () {
    return view('Pertemuan3.ImageProcessing.imageinput');
});


Route::get('/imageoutput', function () {
    return view('Pertemuan3.ImageProcessing.imageoutput');
});
