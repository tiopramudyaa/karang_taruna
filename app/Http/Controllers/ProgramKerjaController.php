<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use Illuminate\Http\Request;

class ProgramKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $proker = ProgramKerja::all();
        return response()->json([
            'message' => 'success',
            'data' => $proker
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $validated = $request->validate([
            'nama_proker' => 'required',
            'ketua' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            // 'karang_taruna_id' => 1,
            'gambar' => 'required'
        ]);
        $validated['karang_taruna_id'] = 1;

        $proker = ProgramKerja::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Program Kerja berhasil ditambahkan',
            'data' => $proker
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        //
        $validated = $request->validate([
            'nama_proker' => 'required',
            'ketua' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            // 'karang_taruna_id' => 'required',
            'gambar' => 'required'
        ]);

        $proker = ProgramKerja::where('id', $id)->first();
        $proker->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Detail Program Kerja',
            'data' => $proker
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $proker = ProgramKerja::where('id', $id)->first();
        $proker->delete();

        return response()->json([
            'success' => true,
            'message' => 'Program Kerja berhasil dihapus',
            'data' => $proker
        ], 200);
    }
}
