<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\publicView;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;






// Route::get('/', function () {
//     return view('public.dashboard');
// })->name('login');


Route::get('/', [publicView::class, 'index']);
Route::get('/login', [
    LoginController::class, 'index'
])->name('login');
Route::post('/loginAction', [LoginController::class, 'loginAction']);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashBoardController::class, 'dashboard']);
    Route::get('/update-profile', [DashBoardController::class, 'update']);
    Route::post('/update-profileA', [DashBoardController::class, 'updateAction']);

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

    Route::get('/dokumentasi-proker/{id}', [DokumentasiController::class, 'index']);
    Route::post('/addimage-proker/{id}', [DokumentasiController::class, 'createAction']);
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});
