<?php

namespace App\Models\layanan_mahasiswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPermohonan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'no', 'tanggal', 'no_surat', 'jenis_permohonan', 'bahasa', 
        'nama_perusahaan', 'alamat_perusahaan', 'nim_tambahan', 'tgl_awal', 'tgl_akhir', 'view_pdf'
    ];
}