<?php

namespace App\Models\SuratPermohonan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; 

class Permohonan extends Model
{
    use HasFactory;

    protected $table = 'permohonans';

    protected $fillable = [
        'user_id', 
        'bahasa',
        'jenis_permohonan',
        'nama_instansi',
        'alamat_instansi',
        'nim_lain',
        'keterangan_tujuan',
        'tgl_awal',
        'tgl_akhir'
    ];

    public function user() 
    { 
        return $this->belongsTo(User::class); 
    }
}