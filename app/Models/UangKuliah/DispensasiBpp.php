<?php

namespace App\Models\UangKuliah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class DispensasiBpp extends Model
{
    use HasFactory;

    protected $table = 'dispensasi_bpps';

    protected $fillable = [
        'name',
        'nim',
        'prodi',
        'alamat',
        'no_telepon',
        'tahun_akademik',
        'info_pembayaran',
        'status_pengajuan',
        'tanggal_pengajuan',
        'alasan_pengajuan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}