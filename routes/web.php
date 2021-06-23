<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/quem-somos', function () {
    return view('quemSomos');
})->name('quem-somos');

Route::get('/shopp', function () {
    return view('compras.shopp');
})->name('shopp');

Route::get('/shoppPag2', function () {
    return view('compras.shopp2');
})->name('shopp2');

Route::get('/shopp/login', function () {
    return view('login');
})->name('login');

Route::get('/shopp/login/cadastro', function () {
    return view('cadastro');
})->name('cadastro');