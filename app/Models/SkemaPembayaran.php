<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkemaPembayaran extends Model
{
    use HasFactory;

    protected $table = 'skema_pembayarans';

    protected $fillable = [
        'nama',
        'nim',
        'semester_tahun',
        'va_full',
        'nominal_full',
        'va_termin1',
        'nominal_termin1',
        'va_termin2',
        'nominal_termin2',
        'total_termin',
        'skema_dipilih'
    ];
}