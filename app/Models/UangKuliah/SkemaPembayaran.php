<?php

namespace App\Models\UangKuliah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        $skema = self::where('user_id', $userId)->first();
        if ($skema) {
            $skema->update([
                'skema_dipilih' => $skemaDipilih
            ]);
        }
    }
}