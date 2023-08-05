<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('product', [ProductController::class, 'index']);
Route::get('product/collection', [ProductController::class, 'collection'])->name('products.export.collection');
Route::get('product/view', [ProductController::class, 'view'])->name('products.export.view');
