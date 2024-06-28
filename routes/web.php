<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = config("store");

    return view('home', $data);
});

Route::get('/home', function () {

    $data = config("store");

    return view('home', $data);
});

Route::get('/list', function () {

    $data = config("store");

    return view('card', $data);
});

Route::get('/about', function () {
    return view('about');
});
