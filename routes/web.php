<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/home', function () {
    // Using a new view with data through an associative array
    return view('home', ['name' => 'Some Name']);
});

Route::get('/about', function () {
    return view('about');
});
