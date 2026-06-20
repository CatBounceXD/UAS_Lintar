<?php

namespace App\Models\Akademik;

use Illuminate\Database\Eloquent\Model;

class KalenderAkademik extends Model
{
    protected $fillable = ['tahun_akademik', 'tanggal', 'keterangan'];
}
