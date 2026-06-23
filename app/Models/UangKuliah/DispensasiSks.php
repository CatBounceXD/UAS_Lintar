<?php

namespace App\Models\UangKuliah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class DispensasiSks extends Model
{
    use HasFactory;

    protected $table = 'dispensasi_skss';

    protected $fillable = [
        'name',
        'nim',
        'prodi',
        'alamat',
        'nomor_telepon',
        'tahun_akademik',
        'status_pengajuan',
        'tanggal_pengajuan',
        'alasan_pengajuan'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}