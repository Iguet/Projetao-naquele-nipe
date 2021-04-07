<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/quem-somos', function () {
    return view('quemSomos');
})->name('quem-somos');
