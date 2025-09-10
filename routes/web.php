<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');
<<<<<<< HEAD
=======

Route::get('/cv', function () {
    return view('person1');
})->name('cv');
>>>>>>> 9880af7 (updated)
