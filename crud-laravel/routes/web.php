<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Models\Alumno;

Route::get('/alumnos', [AlumnoController::class, "index"]);
Route::get('/alumnos/create', [AlumnoController::class, "create"]);
Route::post('/alumnos', [AlumnoController::class, "store"]);
Route::get('/alumnos/{id}/edit', [AlumnoController::class, "edit"]);
Route::put('/alumnos/{id}', [AlumnoController::class, "update"]);

