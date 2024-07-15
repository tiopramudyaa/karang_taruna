<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $anggota = Anggota::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Anggota',
            'data' => $anggota
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required',
            'karang_taruna_id' => 'required',
            'usia' => 'required'
        ]);

        $anggota = Anggota::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Anggota berhasil ditambahkan',
            'data' => $anggota
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        //
        $anggota = Anggota::where('id', $id)->first();

        $validated = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required',
            'karang_taruna_id' => 'required',
            'usia' => 'required'
        ]);

        $anggota->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Detail Anggota',
            'data' => $anggota
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $anggota = Anggota::where('id', $id)->first();

        // return $anggota;

        $anggota->delete();

        return response()->json([
            'success' => true,
            'message' => 'Anggota berhasil dihapus',
            'data' => $anggota
        ], 200);
    }

    /**
     * Search for a specific resource.
     */
    // public function search(Request $request)
    // {
    //     $keyword = $request->query('search');

    //     $anggota = Anggota::where('nama', 'LIKE', "%$keyword%")->get();

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Hasil Pencarian',
    //         'data' => $anggota
    //     ], 200);
    // }
}
