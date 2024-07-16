<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\KarangTaruna;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //
    public function dashboard()
    {
        $jumlahAnggota = Anggota::all()->count();
        $jumlahProker = ProgramKerja::all()->count();

        $karangTaruna = KarangTaruna::where('id', 1)->first();
        return view('dashboard', compact('jumlahAnggota', 'jumlahProker', 'karangTaruna'));
    }
}
