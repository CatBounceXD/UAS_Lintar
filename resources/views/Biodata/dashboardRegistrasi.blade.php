@extends('layouts.main')

@section('page')
<div class="container" style="font-family: Arial, sans-serif; color: #333; padding-bottom: 50px;">
    
    <h2 style="font-size: 24px; margin-bottom: 5px; font-weight: normal;">Selamat Datang</h2>
    
    <div style="border: 1px solid #ccc; border-radius: 4px; background-color: #fff; margin-bottom: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); overflow: hidden;">
        
        <div style="padding: 10px 15px; border-bottom: 1px solid #eee; font-weight: bold; background-color: #fafafa; display: flex; justify-content: space-between; align-items: center;">
            <span>{{ $mahasiswa ? $mahasiswa->nama_mahasiswa : 'SUMAYYA KAYLANI' }}</span>
            <span style="color: #999; font-size: 12px;">▲</span>
        </div>
        
        <div style="padding: 20px;">
            <div style="padding: 25px; background-color: #f5f5f5; border-radius: 4px; margin-bottom: 30px;">
                <h3 style="font-size: 20px; margin-top: 0; margin-bottom: 15px; font-weight: normal;">
                    Di Aplikasi Registrasi Online Calon Mahasiswa Universitas Tarumanagara
                </h3>
                <p style="font-size: 14px; line-height: 1.6;">
                    Melalui aplikasi ini, saudara dapat melengkapi data dan berkas yang dibutuhkan sebagai salah satu syarat menjadi mahasiswa di Universitas Tarumanagara.
                </p>
                <p style="font-size: 14px; font-weight: bold; margin-top: 15px;">
                    Setelah semua isian data lengkap (sudah 100% dan konfirmasi data), <span style="font-weight: normal;">jadwal saudara validasi berkas adalah:</span>
                </p>
                <h4 style="font-size: 18px; font-weight: bold; margin: 10px 0;">tanggal 24 Juli 2025</h4>
                <p style="font-size: 13px; color: #666;">Pelayanan di Biro ADAK hari kerja Senin-Jum'at jam 09:00-16:00 WIB.</p>
            </div>

            <div style="margin-bottom: 15px;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 5px; font-size: 14px;">
                    <span>Kelengkapan Data</span>
                </div>
                <div style="height: 25px; background-color: #e9ecef; border-radius: 4px; position: relative; overflow: hidden; border: 1px solid #dee2e6;">
                    <div style="width: 100%; height: 100%; background: linear-gradient(45deg, #5dade2 25%, #3498db 25%, #3498db 50%, #5dade2 50%, #5dade2 75%, #3498db 75%, #3498db); background-size: 40px 40px; display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: bold;">
                        100.00%
                    </div>
                </div>
            </div>

            <div style="margin-bottom: 30px;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 5px; font-size: 14px;">
                    <span>Kelengkapan Dokumen</span>
                </div>
                <div style="height: 25px; background-color: #e9ecef; border-radius: 4px; position: relative; overflow: hidden; border: 1px solid #dee2e6;">
                    <div style="width: 100%; height: 100%; background: linear-gradient(45deg, #5dade2 25%, #3498db 25%, #3498db 50%, #5dade2 50%, #5dade2 75%, #3498db 75%, #3498db); background-size: 40px 40px; display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: bold;">
                        100.00%
                    </div>
                </div>
            </div>

            <p style="font-size: 15px; margin-bottom: 15px; font-weight: 500;">
                Urutan data yang harus dilengkapi dan berkas yang harus diunggah:
            </p>

            @php
                $steps = [
                    ['id' => '01', 'label' => 'Data Pribadi Mahasiswa', 'done' => true],
                    ['id' => '02', 'label' => 'Data Sekolah Asal', 'done' => true],
                    ['id' => '03', 'label' => 'Data Orang Tua/Wali', 'done' => true],
                    ['id' => '04', 'label' => 'Upload Pas Foto', 'done' => false],
                    ['id' => '05', 'label' => 'Cetak Surat Pernyataan Mahasiswa', 'done' => false],
                    ['id' => '06', 'label' => 'Cetak Surat Pernyataan Belum ada Ijazah SMA', 'done' => false],
                    ['id' => '07', 'label' => 'Konfirmasi kelengkapan data', 'done' => false],
                ];
            @endphp

            @foreach($steps as $step)
            <div style="display: flex; align-items: center; margin-bottom: 12px; background: #fff; padding: 5px; border-radius: 5px;">
                <div style="width: 45px; height: 24px; background-color: {{ $step['done'] ? '#a2d9ce' : '#ddd' }}; border-radius: 12px; position: relative; margin-right: 15px; flex-shrink: 0;">
                    <div style="width: 18px; height: 18px; background-color: #fff; border-radius: 50%; position: absolute; top: 3px; {{ $step['done'] ? 'right: 3px;' : 'left: 3px;' }} shadow: 0 1px 2px rgba(0,0,0,0.2);"></div>
                </div>

                <div style="flex-grow: 1; font-size: 14px; color: {{ $step['done'] ? '#333' : '#999' }};">
                    {{ $step['id'] }}. {{ $step['label'] }}
                </div>

                <div style="width: 40%; height: 20px; background-color: #eee; border-radius: 3px; overflow: hidden; margin-left: 10px;">
                    @if($step['done'])
                    <div style="width: 100%; height: 100%; background: linear-gradient(45deg, #76d7c4 25%, #48c9b0 25%, #48c9b0 50%, #76d7c4 50%, #76d7c4 75%, #48c9b0 75%, #48c9b0); background-size: 20px 20px; color: white; font-size: 10px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                        100.00%
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection