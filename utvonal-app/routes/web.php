<?php

use App\Http\Controllers\VehicleController;
use App\Http\Controllers\RouteController;

Route::get('/vehicles/create', [VehicleController::class, 'create']);
Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');

Route::get('/routes/create', [RouteController::class, 'create']);
Route::post('/routes', [RouteController::class, 'store'])->name('routes.store');

Route::get('/routes/index', [RouteController::class, 'index'])->name('routes.index');