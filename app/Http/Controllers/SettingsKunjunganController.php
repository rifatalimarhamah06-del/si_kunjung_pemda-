<?php

namespace App\Http\Controllers;

use App\Models\SettingsKunjungan;

class SettingsKunjunganController extends Controller
{
    public function index()
    {
        $settings = SettingsKunjungan::all();

        return view('settings_kunjungan.index', compact('settings'));
    }
}