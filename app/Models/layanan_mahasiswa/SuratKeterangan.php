<?php

namespace App\Models\layanan_mahasiswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeterangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no', 
        'tanggal', 
        'no_surat', 
        'jenis_surat_keterangan', 
        'bahasa', 
        'view_pdf'
    ];
}
