<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    protected $table = 'pemohon';
    protected $primaryKey = 'id_pemohon';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'telepon',
        'email',
        'password',
    ];

    protected $hidden = ['password'];
}