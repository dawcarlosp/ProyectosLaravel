<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Models\Alumno;

Route::get('/alumnos', [AlumnoController::class, "index"]);
Route::get('/alumnos/create', function () {
    return view('/alumnos/create');
});

