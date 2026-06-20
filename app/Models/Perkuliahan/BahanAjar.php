<?php

namespace App\Models\Perkuliahan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanAjar extends Model
{
    use HasFactory;
    
    protected $table = 'bahan_ajar';

    protected $fillable = [
        'user_id',
        'kode_matkul', 
        'nama_matkul', 
        'kelas', 
        'dosen_pengajar', 
        'ruang_waktu', 
        'keterangan', 
        'kode_teams', 
        'file_sap', 
        'email_dosen'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}