<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\biodataMhs; // Memanggil model biodataMhs kamu

class BiodataMhsSeeder extends Seeder
{
    public function run(): void
    {
        biodataMhs::create([
            // DATA MAHASISWA
            'npm'                  => '535250159',
            'nama_mahasiswa'       => 'SUMAYYA KAYLANI',
            'no_rekening'          => null,
            'tempat_tanggal_lahir' => 'TANGERANG , 28/05/2007',
            'jenis_kelamin'        => 'WANITA',
            'agama'                => 'ISLAM',
            'alamat'               => 'JL BERSAMA 3 NO 79, BELENDUNG, BENDA, KOTA TANGERANG, BANTEN KOTA TANGERANG 15123',
            'telepon'              => '-',
            'handphone'            => '08988676169',
            'email'                => 'sumayya.535250159@stu.untar.ac.id',
            
            // DATA SEKOLAH
            'asal_sekolah'         => 'SMAIT AL MAKA KOTA JAKARTA BARAT',
            'no_ijazah'            => '131202507656926',
            'tgl_ijazah'           => '05/05/2025',
            
            // DATA ORANG TUA
            'nama_orang_tua'       => 'LILIS SURYANI',
            'alamat_orang_tua'     => 'JL BERSAMA 3 NO 79, BELENDUNG, BENDA, KOTA TANGERANG, BANTEN KOTA TANGERANG 15123',
            'telepon_orang_tua'    => '-',
        ]);
    }
}