<?php

namespace App\Models\perpustakaan; // Sesuaikan dengan namespace asli kamu

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quesioner extends Model
{
    use HasFactory;

    // 1. Tentukan nama tabel jika nama tabelmu tidak standar jamak (plural)
    protected $table = 'quesioners'; 

    // 2. GANTI ATAU TAMBAHKAN INI:
    // Kosongkan guarded artinya kamu mengizinkan SEMUA kolom (termasuk p1-p8, i1-i8, r1-r7) 
    // untuk disimpan langsung melalui Quesioner::create()
    protected $guarded = []; 

    // 3. Relasi ke user yang sudah kamu buat sebelumnya jangan sampai hilang
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id'); 
    }
}