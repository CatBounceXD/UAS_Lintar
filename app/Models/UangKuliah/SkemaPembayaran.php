<?php

namespace App\Models\UangKuliah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class SkemaPembayaran extends Model
{
    use HasFactory;

    protected $table = 'skema_pembayarans';

    protected $fillable = [
        'user_id',
        'semester_tahun',
        'skema_dipilih',
        'va_full',
        'nominal_full',
        'va_termin1',
        'nominal_termin1',
        'va_termin2',
        'nominal_termin2',
        'total_termin',
    ];

  public static function simpanPilihanSkema($userId, $skemaDipilih)
{
    // Hapus data lama user ini dulu supaya bersih
    self::where('user_id', $userId)->delete();

    $info = self::getDataSkema($skemaDipilih);

    self::create([
        'user_id'         => $userId,
        'semester_tahun'  => 'Semester Ganjil 2026/2027',
        'skema_dipilih'   => $skemaDipilih,
        'va_full'         => $info['va_full'] ?? '',
        'nominal_full'    => $info['nominal_full'] ?? 0,
        'va_termin1'      => $info['va_termin1'] ?? '',
        'nominal_termin1' => $info['nominal_termin1'] ?? 0,
        'va_termin2'      => $info['va_termin2'] ?? '',
        'nominal_termin2' => $info['nominal_termin2'] ?? 0,
        'total_termin'    => $info['total_termin'] ?? 0,
    ]);
}
    public static function getDataSkema($skemaDipilih)
    {
        // Langsung isi semua data agar tidak ada kolom yang null/kosong
        return [
            'va_full'         => '1888853525016710',
            'nominal_full'    => 9000000,
            'va_termin1'      => '1888853525016711',
            'nominal_termin1' => 4500000,
            'va_termin2'      => '1888853525016712',
            'nominal_termin2' => 4500000,
            'total_termin'    => 9000000,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}