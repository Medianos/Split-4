<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionalidadesController;

// instituicoes


// clientes
Route::get('/', [FuncionalidadesController::class, 'index']);
Route::get('/create', [FuncionalidadesController::class, 'create']);
Route::post('/store', [FuncionalidadesController::class, 'store']);
Route::get('/{id}/edit', [FuncionalidadesController::class, 'edit']);
Route::put('/update', [FuncionalidadesController::class, 'update']);
Route::delete('/delete', [FuncionalidadesController::class, 'delete']);