<?php

namespace App\Http\Controllers;

use App\Models\JabatanPenduduk;

class JabatanPendudukController extends Controller
{
    public function index()
    {
        $jabatanPenduduk = JabatanPenduduk::all();

        return view('jabatan_penduduk.index', compact('jabatanPenduduk'));
    }
}