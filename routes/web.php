<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ProgramKerjaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [DashBoardController::class, 'dashboard']);
// Route::get('/', [AnggotaController::class, 'dashboard']);


//anggota
Route::get('/anggota', [AnggotaController::class, 'index']);
Route::get('/delete-anggota/{id}', [AnggotaController::class, 'destroy']);
Route::get('/tambah', function () {
    return view('tambahAnggota');
});
Route::post('/create-anggota', [AnggotaController::class, 'createAction']);
Route::get('/edit/{id}', [AnggotaController::class, 'edit']);
Route::post('/edit/{id}', [AnggotaController::class, 'editAction']);


//Proker
Route::get('/proker', [ProgramKerjaController::class, 'index']);
Route::get('/delete-proker/{id}', [ProgramKerjaController::class, 'destroy']);
Route::get('/tambah-proker', function () {
    return view('tambahProker');
});
Route::post('/create-proker', [ProgramKerjaController::class, 'createAction']);
Route::get('/edit-proker/{id}', [ProgramKerjaController::class, 'edit']);
Route::post('/edit-proker/{id}', [ProgramKerjaController::class, 'editAction']);
