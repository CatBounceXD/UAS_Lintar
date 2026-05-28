<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPribadi extends Model
{
    use HasFactory;

    // Menentukan kolom mana saja yang boleh diisi
    protected $fillable = [
        'nama', 
        'npm', 
        'fakultas_prodi', 
        'alamat', 
        'telepon', 
        'email'
    ];
}