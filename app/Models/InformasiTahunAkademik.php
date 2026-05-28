<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiTahunAkademik extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun_akademik_pengajuan', 
        'tanggal_buka_pengajuan'
    ];
}