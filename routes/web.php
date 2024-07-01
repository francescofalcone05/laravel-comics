<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = config("store");

    return view('home', $data);
})->name('hompage');


Route::get('/home', function () {

    $data = config("store");

    return view('home', $data);
})->name('hompage');


Route::get('/list', function () {

    $data = config("store");

    return view('card', $data);
})->name('comics-list');

Route::get('/list/{indice}', function ($indice) {

    $fumetti = config("store.listFumetti");
    $fumetto = $fumetti[$indice];
    $singoloFumetto = [
        "fumetto" => $fumetto
    ];

    return view('card-details', $singoloFumetto);
})->name('comics-list-details');

Route::get('/about', function () {
    return view('about');
})->name('about-us');
