<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JabatanPenduduk extends Model
{
    protected $table = 'jabatan_penduduk';
    protected $primaryKey = 'id_jabatan_penduduk';
    public $timestamps = false;

    protected $fillable = [
        'id_jabatan',
        'id_penduduk',
        'status',
    ];
}