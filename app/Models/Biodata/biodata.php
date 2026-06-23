<?php
namespace App\Models\Biodata;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class biodata extends Model
{
    protected $table = 'biodata_mhs';

    protected $fillable = [
        'user_id',
        'no_rekening', 'tempat_tanggal_lahir', 'jenis_kelamin', 'agama', 
        'alamat', 'telepon', 'handphone', 'asal_sekolah', 'no_ijazah', 
        'tgl_ijazah', 'nama_orang_tua', 'alamat_orang_tua', 'telepon_orang_tua'
    ];

    public function user() { return $this->belongsTo(User::class); }
}