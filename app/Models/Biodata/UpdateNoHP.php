<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateNoHp extends Model
{
    use HasFactory;

    protected $table = 'update_no_hps';

    protected $fillable = [
        'npm', 
        'nama_mahasiswa', 
        'no_hp', 
        'is_aktif_2021'
    ];
}