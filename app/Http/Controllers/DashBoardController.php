<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\KarangTaruna;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function update()
    {
        $karangTaruna = KarangTaruna::where('id', 1)->first();
        return view('editDashboard', compact('karangTaruna'));
    }

    public function updateAction(Request $request)
    {
        $karangTaruna = KarangTaruna::where('id', 1)->first();
        $validated = $request->validate([
            'nama' => 'required',
            'visi' => 'required',
            'misi' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/karangTarunaLogo');
            $logoPath = str_replace('public/', 'storage/', $logoPath);
            $validated['logo'] = $logoPath;

            // Delete previous logo
            if ($karangTaruna->logo) {
                Storage::delete(str_replace('storage/', 'public/', $karangTaruna->logo));
            }
        }

        if ($request->hasFile('background')) {
            $backgroundPath = $request->file('background')->store('public/background');
            $backgroundPath = str_replace('public/', 'storage/', $backgroundPath);
            $validated['background'] = $backgroundPath;

            if ($karangTaruna->background) {
                Storage::delete(str_replace('storage/', 'public/', $karangTaruna->background));
            }
        }

        $karangTaruna->update($validated);

        return redirect('/dashboard');
    }
}
