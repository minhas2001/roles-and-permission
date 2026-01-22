<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Simple GET route to return a page
Route::get('/dashboard', function () {
    return view('backend.dashboard.dashboard');
})->name('dashboard');

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('website');

Route::resources([
'heroes' => HeroController::class,
]);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
