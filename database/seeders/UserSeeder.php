<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Siswa 1',
            'nim' => '535250001',
            'prodi' => 'Teknik Informatika',
            'email' => 'siswa1@mhs.untar.ac.id',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Siswa 2',
            'nim' => '535250002',
            'prodi' => 'Sistem Informasi',
            'email' => 'siswa2@mhs.untar.ac.id',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Siswa 3',
            'nim' => '535250003',
            'prodi' => 'Sistem Informasi',
            'email' => 'siswa3@mhs.untar.ac.id',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Siswa 4',
            'nim' => '535250004',
            'prodi' => 'Sistem Informasi',
            'email' => 'siswa4@mhs.untar.ac.id',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Siswa 5',
            'nim' => '535250005',
            'prodi' => 'Sistem Informasi',
            'email' => 'siswa5@mhs.untar.ac.id',
            'password' => Hash::make('password123'),
        ]);
    }
}