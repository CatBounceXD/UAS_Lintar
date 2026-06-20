<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perkuliahan\Rps;

class RpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataRps = [
            [
                'user_id'     => 1,
                'fakultas'    => 'Fakultas Teknologi Informasi',
                'jurusan'     => 'TEKNIK INFORMATIKA',
                'kode_matkul' => 'TK13017',
                'nama_matkul' => 'SISTEM INFORMASI/INFORMATION SYSTEMS',
                'sks'         => 2,
                'file_rps'    => 'rps_tk13017.pdf'
            ],
            [
                'user_id'     => 1,
                'fakultas'    => 'Fakultas Teknologi Informasi',
                'jurusan'     => 'TEKNIK INFORMATIKA',
                'kode_matkul' => 'TK23007',
                'nama_matkul' => 'STRUKTUR DATA/DATA STRUCTURE',
                'sks'         => 4,
                'file_rps'    => 'rps_tk23007.pdf'
            ],
            [
                'user_id'     => 1,
                'fakultas'    => 'Fakultas Teknologi Informasi',
                'jurusan'     => 'TEKNIK INFORMATIKA',
                'kode_matkul' => 'TK23010',
                'nama_matkul' => 'SISTEM OPERASI/OPERATING SYSTEMS',
                'sks'         => 4,
                'file_rps'    => 'rps_tk23010.pdf'
            ]
        ];

        foreach ($dataRps as $rps) {
            Rps::create($rps);
        }
    }
}
