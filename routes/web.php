<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/quem-somos', function () {
    return view('quemSomos');
})->name('quem-somos');

Route::get('/shopp', function () {
    return view('shopp');
})->name('shopp');

Route::get('/shoppPag2', function () {
    return view('shopp2');
})->name('shopp2');
