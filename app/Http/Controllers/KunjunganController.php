<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;

class KunjunganController extends Controller
{
    public function index()
    {
        $kunjungan = Kunjungan::all();

        return view('kunjungan.index', compact('kunjungan'));
    }
}