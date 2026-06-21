<?php

namespace App\Models\Akademik;

use Illuminate\Database\Eloquent\Model;

class StatusKuliah extends Model
{
    protected $fillable = ['user_id', 'tahun_akademik', 'status', 'sks_ambil', 'sks_peroleh', 'ips', 'sks_ambil_kumulatif', 'sks_peroleh_kumulatif', 'ipk'];
    
    public function user() { return $this->belongsTo(\App\Models\User::class); }
}
