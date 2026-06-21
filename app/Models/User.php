<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name','nim', 'email', 'password', 'nim', 'prodi',
    ];

    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array {
        return ['email_verified_at' => 'datetime', 'password' => 'hashed'];
    }

    // RELASI KE SEMUA FITUR ANAK BISA DITULIS DI SINI NANTI
    public function biodata() { return $this->hasOne(\App\Models\Biodata\biodata::class); }
}