<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/moving-service', function () {
    return view('moving');
})->name('moving-service');

Route::get('/about-us', function () {
    return view('aboutus');
})->name('about-us');
