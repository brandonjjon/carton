<?php

use Illuminate\Support\Facades\Route;
use Brandonjjon\Carton\Http\Controllers\CartonController;

/*
|--------------------------------------------------------------------------
| Carton Controller Routes
|--------------------------------------------------------------------------
|
| Endpoint: /admin/carton
|
*/
Route::group(['prefix' => 'admin'], function () {
    Route::get('/carton', [CartonController::class, 'index'])->name('admin.carton');
});