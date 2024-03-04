<?php

use App\Controllers\AddProductController;
use App\Controllers\HomeController;
use App\Core\Router\Route;


return [
    Route::get('/', [HomeController::class, 'index']),
    Route::post('/product/destroy', [HomeController::class, 'destroy']),
    Route::get('/add-product', [AddProductController::class, 'create']),
    Route::post('/add-product', [AddProductController::class, 'store']),

];
