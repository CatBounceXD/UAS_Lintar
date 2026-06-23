<?php

namespace App\Models\SKPI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsiSkpi extends Model
{
    use HasFactory;

    protected $table = 'isi_skpi';

    protected $fillable = [
        'user_id',
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