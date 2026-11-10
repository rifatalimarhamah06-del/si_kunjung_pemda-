<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $table = 'kunjungan';
    protected $primaryKey = 'id_kunjungan';
    public $timestamps = false;

    protected $fillable = [
        'id_pemohon',
        'id_settings_kunjungan',
        'konfrimasi_admin',
        'tanggal_waktu_admin',
        'konfrimasi_penduduk',
        'tanggal_waktu_penduduk',
        'catatan_admin',
        'catatan_penduduk',
        'tujuannya',
        'tanggal_waktu',
    ];
}