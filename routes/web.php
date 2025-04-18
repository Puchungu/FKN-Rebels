<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('main');
});


Route::get('/products', function () {
    return view('allproducts');
});

Route::get('/products/create', function () {
    return view('form');
});
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');