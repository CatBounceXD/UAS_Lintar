@extends('layouts.main')

@section('isi_halaman')
<style>
    .card-container { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
    .header-title { background-color: #333; color: white; padding: 10px 15px; font-weight: bold; border-radius: 4px; display: flex; justify-content: space-between; align-items: center; }
    
    .btn-rounded { border-radius: 20px; padding: 5px 15px; border: 1px solid #ccc; background-color: #f9f9f9; cursor: pointer; transition: 0.3s; }
    .btn-rounded:hover { background-color: #e0e0e0; }
    
    .table-data { width: 100%; border-collapse: collapse; margin-top: 15px; }
    .table-data th, .table-data td { border: 1px solid #ddd; padding: 8px; text-align: left; font-size: 14px; }
    .table-data th { background-color: #f2f2f2; }
    .table-data tr:nth-child(even) { background-color: #f9f9f9; }
    
    /* Wizard / Tab Styles */
    .wizard-nav { display: flex; gap: 5px; margin-top: 15px; background-color: #f0f0f0; padding: 10px; border-radius: 4px; justify-content: flex-end; }
    .wizard-tabs { display: flex; background-color: #e0e0e0; margin-top: 10px; }
    .tab-item { padding: 8px 15px; color: #888; font-weight: bold; border-right: 1px solid #ccc; flex: 1; text-align: center; }
    .tab-item.active { background-color: #555; color: white; }
    
    .form-section { display: none; padding: 20px; border: 1px solid #ddd; border-top: none; }
    .form-section.active { display: block; }
    
    .form-input { display: flex; flex-direction: column; gap: 10px; }
    .input-group { display: flex; margin-bottom: 15px; }
    .input-label { width: 250px; background-color: #8fbc8f; padding: 10px; font-weight: bold; }
    .input-control { flex: 1; padding: 10px; background-color: #e0e0e0; display: flex; flex-direction: column; gap: 8px; }
    
    .surat-preview { padding: 40px; border: 1px solid #ccc; font-family: serif; text-align: center; }
    .surat-grid { display: grid; grid-template-columns: 150px 20px auto; text-align: left; margin: 20px auto; width: 60%; }
    .persetujuan-box { margin-top: 40px; background-color: #f9f9f9; padding: 15px; border: 1px solid #ddd; text-align: left; }
</style>

<div class="card-container">
    <div class="header-title">
        <span>LAYANAN MAHASISWA - SURAT KETERANGAN</span>
    </div>

    <div id="view-riwayat">
        <div style="text-align: right; margin-top: 15px;">
            <button class="btn-rounded" onclick="startWizard()">Buat Baru</button>
        </div>
        
        <p>Daftar Riwayat Pembuatan Surat Keterangan</p>
        <table class="table-data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>No.Surat</th>
                    <th>Jenis Surat Keterangan</th>
                    <th>Bahasa</th>
                </tr>
            </thead>
            <tbody>
                @forelse($riwayatPengajuan as $index => $riwayat)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $riwayat->tanggal_surat }}</td>
                    <td>S-{{ $riwayat->id }}/UNTAR/2026</td>
                    <td>{{ $riwayat->jenis_surat }}</td>
                    <td>{{ $riwayat->bahasa }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" style="text-align: center;">Belum ada riwayat pembuatan surat.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div id="view-wizard" style="display: none;">
        <div class="wizard-nav">
            <button type="button" class="btn-rounded" id="btn-prev" onclick="changeStep(-1)">< Prev</button>
            <button type="button" class="btn-rounded" id="btn-next" onclick="changeStep(1)">Next ></button>
        </div>

        <div class="wizard-tabs">
            <div class="tab-item active" id="tab-1">L1. Jenis Layanan</div>
            <div class="tab-item" id="tab-2">L2. Nim Lain</div>
            <div class="tab-item" id="tab-3">L3. Persetujuan</div>
            <div class="tab-item" id="tab-4">L4. Preview</div>
        </div>

        <form id="form-pengajuan" action="/layanan-mahasiswa/store" method="POST">
            @csrf
            
            <div class="form-section active" id="step-1">
                <div class="input-group">
                    <div class="input-label">Bahasa :</div>
                    <div class="input-control">
                        <label><input type="radio" name="bahasa" value="Indonesia" checked> Indonesia</label>
                        <label><input type="radio" name="bahasa" value="Inggris"> Inggris</label>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-label">Jenis Surat Keterangan :</div>
                    <div class="input-control">
                        <label><input type="radio" name="jenis_surat" value="Beasiswa" checked> Beasiswa (Scholarship)</label>
                        <label><input type="radio" name="jenis_surat" value="Kantor Orang Tua"> Kantor Orang Tua (Parent Office)</label>
                        <label><input type="radio" name="jenis_surat" value="Kerja Praktek"> Kerja Praktek (Job Training)</label>
                        <label><input type="radio" name="jenis_surat" value="Magang"> Magang (Internship)</label>
                    </div>
                </div>
            </div>

            <div class="form-section" id="step-2">
                <table class="table-data">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>SKS Perolehan</th>
                            <th>IPK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="nim" value="535250175" readonly style="border:none; background:transparent;"></td>
                            <td><input type="text" name="nama" value="YAEL REHUELLAH" readonly style="border:none; background:transparent; width:100%;"></td>
                            <td><input type="number" name="sks" value="16" readonly style="border:none; background:transparent;"></td>
                            <td><input type="text" name="ipk" value="3.43" readonly style="border:none; background:transparent;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="form-section" id="step-3">
                <div class="surat-preview">
                    <h3>SURAT KETERANGAN</h3>
                    <p style="text-align: left;">Rektor Universitas Tarumanagara menerangkan bahwa:</p>
                    
                    <div class="surat-grid">
                        <span>Nama</span><span>:</span><strong>YAEL REHUELLAH</strong>
                        <span>NIM</span><span>:</span><strong>535250175</strong>
                        <span>SKS</span><span>:</span><strong>16</strong>
                        <span>IPK</span><span>:</span><strong>3.43</strong>
                        <span>Fakultas</span><span>:</span>
                        <select name="fakultas">
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                        </select>
                        <span>Jurusan</span><span>:</span>
                        <select name="jurusan">
                            <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                        </select>
                    </div>

                    <p style="text-align: justify;">benar terdaftar sebagai mahasiswa Fakultas Teknologi Informasi Program Studi S1 Teknik Informatika, Universitas Tarumanagara. Surat keterangan ini dibuat untuk keperluan Beasiswa.</p>
                    
                    <p style="text-align: left; margin-top: 30px;">
                        Jakarta, <input type="date" name="tanggal_surat" value="{{ date('Y-m-d') }}" required><br>
                        a.n. Rektor<br>Wakil Rektor 1<br><br><br><br>
                        Sri Tiatri, S.Psi., M.Si., Ph.D., Psikolog
                    </p>

                    <div class="persetujuan-box">
                        <label>
                            <input type="checkbox" name="persetujuan" id="persetujuan" value="1">
                            Saya menyetujui dan tunduk atas semua peraturan di Universitas Tarumanagara, dan apabila dikemudian hari saya terbukti menyalahgunakan dokumen ini, saya bersedia mendapat sanksi.
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    let currentStep = 1;
    const totalSteps = 3; // L1, L2, L3

    function startWizard() {
        document.getElementById('view-riwayat').style.display = 'none';
        document.getElementById('view-wizard').style.display = 'block';
        updateUI();
    }

    function changeStep(direction) {
        // Validasi Checkbox di langkah 3 sebelum lanjut atau submit
        if (currentStep === 3 && direction === 1) {
            const isChecked = document.getElementById('persetujuan').checked;
            if (!isChecked) {
                alert('Anda belum melakukan cek Persetujuan.');
                return; // Stop eksekusi jika tidak dicentang
            }
            // Jika dicentang, form disubmit
            document.getElementById('form-pengajuan').submit();
            return;
        }

        currentStep += direction;
        
        if (currentStep < 1) currentStep = 1;
        if (currentStep > totalSteps) currentStep = totalSteps;

        updateUI();
    }

    function updateUI() {
        // Update Tabs
        for(let i=1; i<=4; i++) {
            let tab = document.getElementById('tab-'+i);
            if(tab) {
                if(i === currentStep) tab.classList.add('active');
                else tab.classList.remove('active');
            }
        }

        // Update Sections
        for(let i=1; i<=3; i++) {
            let section = document.getElementById('step-'+i);
            if(section) {
                if(i === currentStep) section.classList.add('active');
                else section.classList.remove('active');
            }
        }

        // Update Buttons
        document.getElementById('btn-prev').style.display = currentStep === 1 ? 'none' : 'inline-block';
        document.getElementById('btn-next').innerText = currentStep === totalSteps ? 'Kirim Pengajuan' : 'Next >';
    }
</script>
@endsection