<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\GambarDokumentasi;
use App\Models\KarangTaruna;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;

class publicView extends Controller
{
    //
    public function index()
    {
        // $jumlahAnggota = Anggota::all()->count();
        // $jumlahProker = ProgramKerja::all()->count();
        $proker = ProgramKerja::inRandomOrder()->limit(3)->get();
        $karangTaruna = KarangTaruna::where('id', 1)->first();
        $visi = explode(';', $karangTaruna->visi); // Misalkan visi dipisahkan dengan titik koma
        $misi = explode(';', $karangTaruna->misi);
        $images = GambarDokumentasi::all();

        return view('public.dashboard', compact('karangTaruna', 'proker', 'visi', 'misi', 'images'));
    }
}
