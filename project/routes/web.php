<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/Contact', function () {
    return view('contact');
})->name('contact');


Route::get('/about/Anas', function () {
    return view('aboutAnas');
})->name('aboutAnas');

Route::get('/about/Akmal', function () {
    return view('aboutAkmal');
})->name('aboutAkmal');

Route::get('/about/Harith', function () {
    return view('aboutHarith');
})->name('aboutHarith');

Route::get('/about/Badzli', function () {
    return view('aboutBadzli');
})->name('aboutBadzli');
