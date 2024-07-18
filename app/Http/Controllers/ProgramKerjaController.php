<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramKerjaController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  */
    public function index()
    {
        //
        $proker = ProgramKerja::all();
        return view('proker', compact('proker'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    public function createAction(Request $request)
    {
        //
        $validated = $request->validate([
            'nama_proker' => 'required',
            'ketua' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            // 'karang_taruna_id' => 1,
            // 'gambar' => 'required'
        ]);
        $validated['karang_taruna_id'] = 1;

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/prokerImages');
            $gambarPath = str_replace('public/', 'storage/', $gambarPath);
            // Simpan path gambar ke dalam $data
            $validated['gambar'] = $gambarPath;
        }

        ProgramKerja::create($validated);

        return redirect('/proker');
    }

    public function edit($id)
    {
        //
        $proker = ProgramKerja::where('id', $id)->first();

        return view('editProker', compact('proker'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function editAction($id, Request $request)
    {
        //
        $proker = ProgramKerja::where('id', $id)->first();
        $validated = $request->validate([
            'nama_proker' => 'required',
            'ketua' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            // 'karang_taruna_id' => 1,
            // 'gambar' => 'required'
        ]);
        // $validated['karang_taruna_id'] = 1;

        $proker->update($validated);

        return redirect('/proker');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy($id)
    {
        //
        $proker = ProgramKerja::where('id', $id)->first();

        if ($proker->gambar && Storage::exists(str_replace('storage/', 'public/', $proker->gambar))) {
            Storage::delete(str_replace('storage/', 'public/', $proker->gambar));
        }

        $proker->delete();

        return redirect('/proker');
    }
}
