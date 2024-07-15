<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KarangTarunaController;
use App\Http\Controllers\ProgramKerjaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// profile
Route::get('/index', [KarangTarunaController::class, 'index']);
Route::put('/edit', [KarangTarunaController::class, 'edit']);

// anggota
Route::get('/anggota', [AnggotaController::class, 'index']);
Route::post('/create-anggota', [AnggotaController::class, 'create']);
Route::put('/edit-anggota/{id}', [AnggotaController::class, 'edit']);
Route::delete('/delete-anggota/{id}', [AnggotaController::class, 'destroy']);
Route::get('/anggota-search', [AnggotaController::class, 'search']);


//program kerja
Route::get('/program-kerja', [ProgramKerjaController::class, 'index']);
Route::post('/create-program-kerja', [ProgramKerjaController::class, 'create']);
Route::put('/edit-program-kerja/{id}', [ProgramKerjaController::class, 'edit']);
Route::delete('/delete-program-kerja/{id}', [ProgramKerjaController::class, 'destroy']);
