<?php

namespace App\Models\UangKuliah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagihanPembayaran extends Model
{
    use HasFactory;

    protected $table = 'tagihan_pembayarans';

    protected $fillable = [
        'user_id',
        'tahun_akademik',
        'jenis',
        'no_va',
        'tgl_batas_bayar',
        'jumlah_tagihan',
        'rincian',
        'bayar_bank',
        'bayar_tanggal',
        'bayar_nominal',
        'status'
    ];
}