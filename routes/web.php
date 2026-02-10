<?php

use App\Http\Controllers\Backend\CollectionController;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductTypeController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Simple GET route to return a page
Route::get('/dashboard', function () {
    return view('backend.dashboard.dashboard');
})->name('dashboard');

Route::get('/', [FrontendController::class, 'index'])->name('website');
Route::get('/product/{id}/details', [FrontendController::class, 'getProductDetails'])
    ->name('product.details');

Route::get('/product/details/static', [FrontendController::class, 'getProductDetailsStatic'])
    ->name('product-details.static');
Route::get('/product/page', [FrontendController::class, 'getProductPage'])->name('product.page');

Route::resources([
    'heroes' => HeroController::class,
    'collections' => CollectionController::class,
    'products' => ProductController::class,
    'product-type' => ProductTypeController::class,
]);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
