<?php

namespace App\Models\SuratKeterangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nim',
        'nama',
        'sks',
        'ipk',
        'bahasa',
        'jenis_surat',
        'tanggal_surat',
        'fakultas',
        'jurusan'
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}