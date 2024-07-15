<?php

namespace App\Http\Controllers;

use App\Models\KarangTaruna;
use Illuminate\Http\Request;

class KarangTarunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deskripsi = KarangTaruna::all();
        return response()->json($deskripsi);
        // return view('karangtaruna.index', compact('deskripsi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $profile = KarangTaruna::where('id', 1)->first();

        $validated = $request->validate([
            'nama' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'logo' => 'required',
            'gambar_dokumentasi' => 'required',
        ]);

        $profile->update($validated);

        return response()->json($profile);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KarangTaruna $karangTaruna)
    {
        //
    }
}
