<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatan = Jabatan::all();

        return view('jabatan.index', compact('jabatan'));
    }
}