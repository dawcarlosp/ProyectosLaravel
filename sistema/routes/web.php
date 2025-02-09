<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
Route::get('/productos', [ProductoController::class, "index"]);
Route::get('/productos/create', [ProductoController::class, "create"]);
Route::post('/productos', [ProductoController::class, "store"]);

Route::get('/productos/{id}/edit', [ProductoController::class, "edit"]);
Route::put('/productos/{id}', [ProductoController::class, "update"]);
Route::delete('/productos/{id}', [ProductoController::class, "destroy"]);
//Route::get('/productos', [ProductoController::class, "show"]);