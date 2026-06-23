<?php

namespace App\Models\cuti_online;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPribadi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 
        'npm', 
        'fakultas_prodi', 
        'alamat', 
        'telepon', 
        'email'
    ];
}