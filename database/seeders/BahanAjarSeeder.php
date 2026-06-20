<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perkuliahan\BahanAjar;

class BahanAjarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataBahanAjar = [
            [
                'user_id'        => 1,
                'kode_matkul'    => 'TK13030',
                'nama_matkul'    => 'NUMERICAL METHOD (4)',
                'kelas'          => 'D',
                'dosen_pengajar' => '10189013 DYAH ERNY HERWINDIATI, Prof., Ir., M.Si, Dr.',
                'ruang_waktu'    => 'R0901 / KAMIS(09:30 s/d 11:10)',
                'keterangan'     => 'Teori',
                'kode_teams'     => '6zwmuof',
                'file_sap'       => 'sap_numerical.pdf',
                'email_dosen'    => 'dyahh@fti.untar.ac.id'
            ],
            [
                'user_id'        => 1,
                'kode_matkul'    => 'TK23007',
                'nama_matkul'    => 'DATA STRUCTURES (4)',
                'kelas'          => 'D',
                'dosen_pengajar' => '10390001 JEANNY PRAGANTHA, Ir., M.Eng',
                'ruang_waktu'    => 'R0901 / JUMAT(09:30 s/d 11:10)',
                'keterangan'     => 'Teori',
                'kode_teams'     => 'xwmffbn',
                'file_sap'       => 'sap_datastructure.pdf',
                'email_dosen'    => 'jeannyp@fti.untar.ac.id'
            ],
            [
                'user_id'        => 1,
                'kode_matkul'    => 'TK13034',
                'nama_matkul'    => 'OPERATING SYSTEMS (2)',
                'kelas'          => 'D',
                'dosen_pengajar' => '10823004 IRVAN LEWENUSA, S.Kom., M.Kom.',
                'ruang_waktu'    => 'R0902 / SENIN(09:30 s/d 11:10)',
                'keterangan'     => 'Teori',
                'kode_teams'     => '2mwjt37',
                'file_sap'       => 'sap_os.pdf',
                'email_dosen'    => 'irvanl@fti.untar.ac.id'
            ]
        ];

        foreach ($dataBahanAjar as $bahan) {
            BahanAjar::create($bahan);
        }
    }
}
