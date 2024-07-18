<?php

namespace App\Http\Controllers;

use App\Models\GambarDokumentasi;
use App\Models\ProgramKerja;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    //

    public function index($id)
    {
        $proker = ProgramKerja::where('id', $id)->first();

        $dokumentasi = $proker->gambarDokumentasi;

        return view('tambahDokumentasi', compact('proker', 'dokumentasi'));
    }

    public function createAction($id, Request $request)
    {
        // $proker = ProgramKerja::where('id', $id)->first();
        // $dokumentasi = $proker->gambarDokumentasi;

        $validated = $request->validate([
            'path' => 'required'
        ]);

        $validated['program_kerja_id'] = $id;

        if ($request->hasFile('path')) {
            $gambarPath = $request->file('path')->store('public/dokumentasiImages');
            $gambarPath = str_replace('public/', 'storage/', $gambarPath);
            // Simpan path gambar ke dalam $data
            $validated['path'] = $gambarPath;
        }

        GambarDokumentasi::create($validated);

        return redirect('/dokumentasi-proker' . '/' . $id);
        // return view('tambahDokumentasi', compact('proker', 'dokumentasi'));
    }
}
