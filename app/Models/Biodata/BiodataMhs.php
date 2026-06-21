<?php

namespace App\Models\Biodata; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class BiodataMhs extends Model
{
    use HasFactory;

    protected $table = 'biodata_mhs';
    protected $guarded = []; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}