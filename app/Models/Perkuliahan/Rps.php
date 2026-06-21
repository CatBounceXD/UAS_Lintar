<?php

namespace App\Models\Perkuliahan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rps extends Model
{
    use HasFactory;

    protected $table = 'rps';
    
    protected $fillable = [
        'user_id',
        'fakultas', 'jurusan', 'kode_matkul', 'nama_matkul', 'sks', 'file_rps'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}