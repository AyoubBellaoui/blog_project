<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get("/products", [ProductController::class, 'index'])->name("products.list");

Route::get("/", function () {

    return view("Home");
});

// controller Routes
Route::get('create/category', [CategoryController::class, 'show_category'])->name('category.create');
Route::post('/store/category', [CategoryController::class, 'store_category'])->name('category.store');
Route::get('/list/categories', [CategoryController::class, 'list_category'])->name('category.list');
Route::delete('delete/category/{id}', [CategoryController::class, 'delete_category'])->name('category.delete');


