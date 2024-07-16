<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class AnggotaController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  */
    public function index()
    {
        //
        $anggota = Anggota::all();

        return view('anggota', compact('anggota'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    public function createAction(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            // 'gambar' => 'required',
            // 'karang_taruna_id' => 'required',
            'usia' => 'required'
        ]);

        $validated['karang_taruna_id'] = 1;

        Anggota::create($validated);

        return redirect('/anggota');
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit($id)
    {
        //
        $anggota = Anggota::where('id', $id)->first();

        return view('editAnggota', compact('anggota'));
    }

    public function editAction($id, Request $request)
    {
        //
        $anggota = Anggota::where('id', $id)->first();

        $validated = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            // 'gambar' => 'required',
            // 'karang_taruna_id' => 'required',
            'usia' => 'required'
        ]);

        $anggota->update($validated);

        return redirect('/anggota');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy($id)
    {
        $anggota = Anggota::where('id', $id)->first();

        // return $anggota;

        $anggota->delete();

        return redirect('/anggota');
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
