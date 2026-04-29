<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $age = 33;
    $data = [
        "name" => "Roman",
        "age" => $age
    ];

    return view('welcome', $data);
})->name('home');

Route::get('/crudy', function () {
    return view('crud');
})->name('crud');
