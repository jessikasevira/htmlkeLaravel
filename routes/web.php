<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/sigup', function () {
    return view('singup');
});

Route::get('/login', function () {
    return view('login');
});