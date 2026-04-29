<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('app.master');
});

// Route::get('/navbar', function () {
//     return view('app.navbar');
// });

// Route::get('/sidebar', function () {
//     return view('app.sidebar');
// });

