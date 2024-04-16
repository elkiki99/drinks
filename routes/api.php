<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/categorias', CategoriaController::class);
Route::apiResource('/productos', ProductoController::class);

// Autenticación
Route::post('/registro', [AuthController::class, 'register']);