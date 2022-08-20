<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Peserta extends Model
{
    protected $fillable = [
        'id',
        'total_nilai',
        'nama_peserta',
        'asal_sekolah',
        'alamat_rumah',
        'tgl_lahir',
        'jenis_kelamin',
        'jumlah_poin_kinerja',
        'jumlah_poin_kedisiplinan',
        'nilai_kinerja_task1',
        'nilai_kinerja_task2',
        'nilai_kinerja_task3',
        'nilai_kedisiplinan_disiplin',
        'nilai_kedisiplinan_sopan',
        'nilai_kedisiplinan_santun',
        'is_nilai_kinerja_finish',
        'is_nilai_kedisiplinan_finish'
    ];

}