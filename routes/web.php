<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Simple GET route to return a page
Route::get('/dashboard', function () {
    return view('backend.dashboard.dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('frontend.website');
})->name('website');


Route::resources([
    'abouts' => \App\Http\Controllers\AboutController::class,
]);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
