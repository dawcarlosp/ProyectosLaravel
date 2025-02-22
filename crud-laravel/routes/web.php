<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\WeatherController;
use App\Models\Alumno;

Route::get('/alumnos', [AlumnoController::class, "index"])->name('alumnos.index');
Route::get('/alumnos/create', [AlumnoController::class, "create"]);
Route::post('/alumnos', [AlumnoController::class, "store"]);
Route::get('/alumnos/{id}/edit', [AlumnoController::class, "edit"]);
Route::put('/alumnos/{id}', [AlumnoController::class, "update"]);
Route::delete('/alumnos/{id}', [AlumnoController::class, "destroy"]);
Route::get('/alumnos/{alumno}', [AlumnoController::class, "show"])->name('alumnos.show');
Route::post('/alumnos/fechaNacimiento', [AlumnoController::class, "customGet"]);
Route::get('/tiempo/{city}', [WeatherController::class, "show"]);
Route::get('/tiempoFoto/{city}', [WeatherController::class, "mostrar"]);
