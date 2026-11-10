<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\JabatanPendudukController;
use App\Http\Controllers\SettingsKunjunganController;
use App\Http\Controllers\SettingsKegiatanController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/penduduk', [PendudukController::class, 'index']);
Route::get('/jabatan', [JabatanController::class, 'index']);
Route::get('/pemohon', [PemohonController::class, 'index']);
Route::get('/kunjungan', [KunjunganController::class, 'index']);
Route::get('/jabatan-penduduk', [JabatanPendudukController::class, 'index']);
Route::get('/settings-kunjungan', [SettingsKunjunganController::class, 'index']);
Route::get('/settings-kegiatan', [SettingsKegiatanController::class, 'index']);
// Route Login
Route::get('/login', [AuthController::class, 'login']);
Route::post('/proses-login', [AuthController::class, 'prosesLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('role:Admin,Penduduk');