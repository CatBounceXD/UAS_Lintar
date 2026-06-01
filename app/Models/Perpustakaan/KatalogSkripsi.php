<?php

namespace App\Models\Perpustakaan;

use Illuminate\Database\Eloquent\Model;

class KatalogSkripsi extends Model
{
      protected $table = 'katalog_skripsi';

    protected $fillable = [
        'judul',
        'pengarang',
        'kategori',
        'tahun'
    ];
}
