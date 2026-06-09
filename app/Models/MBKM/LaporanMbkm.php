<?php

namespace App\Models\MBKM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanMbkm extends Model
{
    use HasFactory;

    // Mengizinkan kolom ini untuk diisi
    protected $fillable = [
        'nama', 
        'npm', 
        'prodi', 
        'status_mbkm', 
        'keterangan'
    ];
}