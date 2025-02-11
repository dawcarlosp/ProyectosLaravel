<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Models\Alumno;

Route::get('/alumnos', [AlumnoController::class, "index"]);
Route::get('/alumnos/create', [AlumnoController::class, "create"]);
Route::post('/alumnos', [AlumnoController::class, "store"]);

