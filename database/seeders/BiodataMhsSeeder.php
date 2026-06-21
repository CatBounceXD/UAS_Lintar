<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Biodata\biodata; 

class BiodataMhsSeeder extends Seeder
{
    public function run(): void
    {
        // (NIM: 535250001)
        biodata::create([
            'user_id'              => 1,
            'no_rekening'          => null,
            'tempat_tanggal_lahir' => 'TANGERANG, 28/05/2007',
            'jenis_kelamin'        => 'WANITA',
            'agama'                => 'ISLAM',
            'alamat'               => 'JL BERSAMA 3 NO 79, BELENDUNG, BENDA, KOTA TANGERANG, BANTEN 15123',
            'telepon'              => '-',
            'handphone'            => '08988676169',
            
            // DATA SEKOLAH
            'asal_sekolah'         => 'SMAIT AL MAKA KOTA JAKARTA BARAT',
            'no_ijazah'            => '131202507656926',
            'tgl_ijazah'           => '05/05/2025',
            
            // DATA ORANG TUA
            'nama_orang_tua'       => 'LILIS SURYANI',
            'alamat_orang_tua'     => 'JL BERSAMA 3 NO 79, BELENDUNG, BENDA, KOTA TANGERANG, BANTEN 15123',
            'telepon_orang_tua'    => '-',
        ]);

        // Opsional: Anda bisa copy block biodata::create() di atas 
        // dan ubah 'user_id' => 2 untuk melengkapi data Siswa 2, dan seterusnya.
    }
}