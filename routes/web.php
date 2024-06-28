<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/list', function () {

    $data = config("store");

    return view('card', $data);
});

Route::get('/about', function () {
    return view('about');
});
