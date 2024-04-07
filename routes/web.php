<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit']);
