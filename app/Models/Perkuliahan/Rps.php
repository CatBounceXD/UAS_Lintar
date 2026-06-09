<?php

namespace App\Models\Perkuliahan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rps extends Model
{
    use HasFactory;

    protected $table = 'rps';
    
    protected $fillable = [
        'fakultas', 'jurusan', 'kode_matkul', 'nama_matkul', 'sks', 'file_rps'
    ];
}