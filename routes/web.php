<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AnggotaController::class, 'index']);


//anggota
Route::get('/anggota', [AnggotaController::class, 'index']);
Route::get('/delete-anggota/{id}', [AnggotaController::class, 'destroy']);

Route::get('/proker', function () {
    return view('proker');
});



Route::get('/tambah', function () {
    return view('tambahAnggota');
});
