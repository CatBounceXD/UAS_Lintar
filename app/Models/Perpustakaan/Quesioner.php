<?php

namespace App\Models\Perpustakaan; // Sesuaikan dengan namespace asli kamu

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quesioner extends Model
{
    use HasFactory;

    protected $table = 'quesioners'; 
    protected $guarded = []; 

    public function user() { return $this->belongsTo(\App\Models\User::class, 'user_id'); }
}