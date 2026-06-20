<?php

namespace App\Models\SuratKeterangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuans';

    protected $fillable = [
        'bahasa',
        'jenis_surat',
        'nim',
        'nama',
        'sks',
        'ipk',
        'fakultas',
        'jurusan',
        'tanggal_surat',
        'persetujuan'
    ];
}