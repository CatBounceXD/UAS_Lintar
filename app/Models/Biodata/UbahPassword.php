<?php

namespace App\Models\Biodata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UbahPassword extends Model
{
    use HasFactory;

    protected $table = 'ubah_passwords';

    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'email_office'
    ];
}