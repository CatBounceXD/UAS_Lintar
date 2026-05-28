<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KatalogBuku extends Model
{
    protected $table = 'katalog_bukus';

    protected $fillable = [

        'judul_buku',
        'call_number',
        'perpustakaan'

    ];
}