<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Product Registration Module Routes
|
*/

// Redirect root to products list
Route::get('/', function () {
    return redirect()->route('products.index');
});

// Product routes (only index, create, store — no edit/delete)
Route::get('/products',        [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products',       [ProductController::class, 'store'])->name('products.store');
