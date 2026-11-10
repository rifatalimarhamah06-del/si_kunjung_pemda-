<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingsKegiatan extends Model
{
    protected $table = 'settings_kegiatan';
    protected $primaryKey = 'id_settings_kegiatan';
    public $timestamps = false;

    protected $fillable = [
        'tanggal_awal',
        'tanggal_akhir',
        'id_jabatan_penduduk',
        'kegiatan',
    ];
}