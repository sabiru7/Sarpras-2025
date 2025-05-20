<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // This should point to your main HTML file, e.g., resources/views/welcome.blade.php
});

Route::get('/home', function () {
    return view('home'); // This should point to your next page, e.g., resources/views/next-page.blade.php
});
Route::get('/welcome', function () {
    return view('welcome'); // This should point to your next page, e.g., resources/views/next-page.blade.php
});