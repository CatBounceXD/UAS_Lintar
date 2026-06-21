<?php

namespace App\Models\SKPI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkpiMhs extends Model
{
    use HasFactory;

    protected $table = 'skpi_mhs';

    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'jumlah_kategori'
    ];
}