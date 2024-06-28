<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/list', function () {

    $data = [
        "paragraph" => [
            "first" => "Questa",
            "second" => "e` una",
            "third" => "prova",
        ]

    ];

    return view('card', $data);
});

Route::get('/about', function () {
    return view('about');
});
