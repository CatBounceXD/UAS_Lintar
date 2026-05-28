<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lengkapData extends Model
{
    use HasFactory;

    protected $table = 'lengkap_datas';

    protected $fillable = [
        'npm', 'nama_mahasiswa', 'no_rekening', 'tempat_tanggal_lahir', 
        'jenis_kelamin', 'agama', 'alamat', 'telepon', 'handphone', 'email',
        'asal_sekolah', 'no_ijazah', 'tgl_ijazah',
        'nama_orang_tua', 'alamat_orang_tua', 'telepon_orang_tua'
    ];
}