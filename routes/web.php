<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('/second', function () {
    return view('second');
});