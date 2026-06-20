<?php

namespace App\Models\Akademik;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class StudiMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'studi_mahasiswas';

    protected $fillable = [
        'user_id', 'tahun_akademik', 'kode_matkul', 'nama_matkul', 'sks', 'kelas',
        'status_matkul', 'jumlah_pertemuan', 'jumlah_kehadiran', 
        'nilai_uts', 'nilai_angka', 'nilai_huruf', 'bobot'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}