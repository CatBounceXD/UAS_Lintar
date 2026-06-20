<?php

namespace App\Models\perpustakaan;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Quesioner extends Model
{
    protected $table = 'quesioners';

    protected $fillable = [

        'user_id',

        'frekuensi_kunjungan',
        'alasan_kunjungan',

        'frekuensi_akses_web',
        'alasan_akses_web',

        'petugas_memahami',
        'petugas_membimbing',
        'fasilitas_memadai',
        'koleksi_lengkap',
        'kenyamanan_ruangan',

        'saran'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}