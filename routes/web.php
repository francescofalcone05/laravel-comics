<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = [
        "list" =>  config("store")
    ];

    return view('home', $data);
})->name('hompage');


Route::get('/home', function () {

    $data = [
        "list" =>  config("store")
    ];

    return view('home', $data);
})->name('hompage');


Route::get('/list', function () {

    $data = [
        "list" =>  config("store")
    ];

    return view('card', $data);
})->name('comics-list');


Route::get('/about', function () {
    return view('about');
})->name('about-us');
