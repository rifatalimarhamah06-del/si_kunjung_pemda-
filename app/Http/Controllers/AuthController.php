<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = Penduduk::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session([
                'id_penduduk' => $user->id_penduduk,
                'nama' => $user->nama_penduduk,
                'status' => $user->status,
            ]);

            return redirect('/dashboard');
        }

        return back()->with('error', 'Username atau password salah!');
    }

    public function logout()
    {
        session()->flush();

        return redirect('/login');
    }
}