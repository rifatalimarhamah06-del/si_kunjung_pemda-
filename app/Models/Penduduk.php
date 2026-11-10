<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';

    protected $primaryKey = 'id_penduduk';

    public $timestamps = false;

    protected $fillable = [
        'nama_penduduk',
        'nik',
        'kk',
        'jenis_kelamin',
        'alamat',
        'username',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
    ];
}