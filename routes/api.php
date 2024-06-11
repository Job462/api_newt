<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\LineaController;
use App\Http\Controllers\ZonaController;
use App\Http\Controllers\PlanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::resource('clientes', ClienteController::class);
Route::resource('facturas', FacturaController::class);
Route::resource('lineas', LineaController::class);
Route::resource('zonas', ZonaController::class);
Route::resource('planes', PlanController::class);


