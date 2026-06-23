<?php

namespace App\Models\MBKM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanMbkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 
        'npm', 
        'prodi', 
        'status_mbkm', 
        'keterangan'
    ];
}