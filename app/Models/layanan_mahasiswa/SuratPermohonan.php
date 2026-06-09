<?php

namespace App\Models\layanan_mahasiswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPermohonan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no', 
        'tanggal', 
        'no_surat', 
        'jenis_permohonan', 
        'bahasa', 
        'view_pdf'
    ];
}