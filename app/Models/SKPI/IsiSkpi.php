<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsiSkpi extends Model
{
    use HasFactory;

    protected $table = 'isi_skpi';

    protected $fillable = [
        'kategori',
        'jenis',
        'kegiatan',
        'tingkat',
        'klasifikasi',
        'tgl_mulai',
        'tgl_selesai',
        'file_bukti'
    ];
}