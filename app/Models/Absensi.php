<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Absensi extends Model
{
    protected $fillable = [
        'id',
        'tanggal',
        'id_peserta',
        'status_kehadiran'
    ];

}