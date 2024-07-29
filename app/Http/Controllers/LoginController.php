<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function index()
    {
        if (auth()->check()) {
            // Arahkan pengguna ke halaman dashboard jika sudah login
            return redirect('/dashboard');
        }

        return view('login');
    }

    public function loginAction(Request $request)
    {
        $loginData = $request->all();

        $validate = Validator::make($loginData, [
            'email' => 'required|email:rfc',
            'password' => 'required'
        ]);

        if ($validate->fails()) {
            Session::flash('error', $validate->errors());
            return back();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->active) { //$user->active
                return redirect('/dashboard');
                // if ($user->id_customer != null) {
                //     return redirect('');
                // } else {
                //     $jabatan = Karyawan::where('id_karyawan', $user->id_karyawan)->first();
                //     $jabatan = $jabatan->id_jabatan;
                //     if ($jabatan == 1) {
                //         return redirect('owner');
                //     } else if ($jabatan == 2) {
                //         return redirect('admin');
                //     } else if ($jabatan == 3) {
                //         return redirect('manager');
                //     }
                // }
            } else {
                Auth::logout();
                Session::flash('error', 'Akun anda belum diverifikasi, silahkan cek email anda.');
                return back();
            }
        }
        Session::flash('error', 'Email atau password salah.');
        return back();
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
