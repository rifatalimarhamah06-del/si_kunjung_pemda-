<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;

class PemohonController extends Controller
{
    public function index()
    {
        $pemohon = Pemohon::all();

        return view('pemohon.index', compact('pemohon'));
    }
}