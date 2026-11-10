<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingsKunjungan extends Model
{
    protected $table = 'settings_kunjungan';
    protected $primaryKey = 'id_settings_kunjungan';
    public $timestamps = false;

    protected $fillable = [
        'id_jabatan_penduduk',
        'tanggal',
        'jam_aktif',
        'jam_non_aktif',
        'status',
    ];
}
