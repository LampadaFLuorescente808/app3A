<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return response()->file(resource_path('views/static/home.html'));
});

Route::get('/login', function () {
    return response()->file(resource_path('views/static/login.html'));
});

Route::get('/cadastro', function () {
    return response()->file(resource_path('views/static/cadastro.html'));
});

Route::get('/recuperar', function () {
    return response()->file(resource_path('views/static/recuperar.html'));
});