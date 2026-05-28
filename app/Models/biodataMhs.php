<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class biodataMhs extends Model
{
    protected $table = 'biodata_mhs';

    protected $fillable = [
        'npm', 'nama_mahasiswa', 'no_rekening', 'tempat_tanggal_lahir', 
        'jenis_kelamin', 'agama', 'alamat', 'telepon', 'handphone', 'email',
        'asal_sekolah', 'no_ijazah', 'tgl_ijazah',
        'nama_orang_tua', 'alamat_orang_tua', 'telepon_orang_tua'
    ];
}