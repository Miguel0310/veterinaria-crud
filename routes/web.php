<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\VeterinarioController;
use App\Http\Controllers\TratamientoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('clientes', ClienteController::class);
Route::resource('mascotas', MascotaController::class);
Route::resource('citas', CitaController::class);
Route::resource('veterinarios', VeterinarioController::class);
Route::resource('tratamientos', TratamientoController::class);