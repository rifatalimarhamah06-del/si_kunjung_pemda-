<?php

namespace App\Http\Controllers;

use App\Models\SettingsKegiatan;

class SettingsKegiatanController extends Controller
{
    public function index()
    {
        $settings = SettingsKegiatan::all();

        return view('settings_kegiatan.index', compact('settings'));
    }
}