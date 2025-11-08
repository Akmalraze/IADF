<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Home', function () {
    return view('home');
})->name('home');

Route::get('/About', function () {
    return view('about');
})->name('about');

Route::get('/Contact', function () {
    return view('contact');
})->name('contact');


