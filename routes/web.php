<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\admincontroller;


Route::get('/', function () {
    return view('main');
});


Route::get('/products', function () {
    return view('allproducts');
});

Route::get('/admin/create', function () {
    return view('form');
});

Route::get('/admin', function () {
    return view('adminmain');
});

Route::get('/admin/edit', function () {
    return view('adminedit');
});

Route::get('/admin/allproducts', [admincontroller::class, 'select'])->name('admin.allproducts');
Route::get("/admin/edit/{id}",[admincontroller::class,'edit'])->name("admin.edit");
Route::put("/admin/edit/{id}",[admincontroller::class,'update'])->name("admin.update");


Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');