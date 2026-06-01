<?php

namespace App\Models\UangKuliah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DispensasiSks extends Model
{
    use HasFactory;

    // Menentukan nama tabel di database
    protected $table = 'dispensasi_skss';

    // Mendaftarkan 9 kolom sesuai request kamu
    protected $fillable = [
        'nama',
        'nomor_pokok_siswa',
        'fakultas_prodi',
        'alamat',
        'nomor_telepon',
        'tahun_akademik',
        'status_pengajuan',
        'tanggal_pengajuan',
        'alasan_pengajuan'
    ];
}