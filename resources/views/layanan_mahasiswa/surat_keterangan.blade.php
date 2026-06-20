@extends('layouts.main')

@section('page')
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
                    <td align="center">{{ $index + 1 }}</td>
                    <td align="center">{{ $riwayat->tanggal_surat }}</td>
                    <td align="center">S-{{ $riwayat->id }}/UNTAR/2026</td>
                    <td>{{ $riwayat->jenis_surat }}</td>
                    <td align="center">{{ $riwayat->bahasa }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" align="center">Belum ada riwayat pembuatan surat.</td>
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
            <div class="tab-item" id="tab-2">L2. Data Mahasiswa</div>
            <div class="tab-item" id="tab-3">L3. Persetujuan</div>
            <div class="tab-item" id="tab-4">L4. Preview</div>
        </div>

        <form id="form-pengajuan" action="/layanan-mahasiswa/store" method="POST">
            @csrf
            
            <div class="form-section active" id="step-1">
                <div class="input-group">
                    <div class="input-label">Bahasa :</div>
                    <div class="input-control">
                        <label><input type="radio" name="bahasa" value="Indonesia" checked onchange="updatePreview()"> Indonesia</label>
                        <label><input type="radio" name="bahasa" value="Inggris" onchange="updatePreview()"> Inggris</label>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-label">Jenis Surat Keterangan :</div>
                    <div class="input-control">
                        <label><input type="radio" name="jenis_surat" value="Beasiswa" checked onchange="updatePreview()"> Beasiswa (Scholarship)</label>
                        <label><input type="radio" name="jenis_surat" value="Kantor Orang Tua" onchange="updatePreview()"> Kantor Orang Tua (Parent Office)</label>
                        <label><input type="radio" name="jenis_surat" value="Kerja Praktek" onchange="updatePreview()"> Kerja Praktek (Job Training)</label>
                        <label><input type="radio" name="jenis_surat" value="Magang" onchange="updatePreview()"> Magang (Internship)</label>
                        <label><input type="radio" name="jenis_surat" value="Mahasiswa Aktif" onchange="updatePreview()"> Mahasiswa Aktif (Active Student)</label>
                        <label><input type="radio" name="jenis_surat" value="Mengurus BPJS" onchange="updatePreview()"> Mengurus BPJS (BPJS Administration)</label>
                        <label><input type="radio" name="jenis_surat" value="Permohonan Passport" onchange="updatePreview()"> Permohonan Passport (Passport Application)</label>
                        <label><input type="radio" name="jenis_surat" value="Permohonan Visa" onchange="updatePreview()"> Permohonan Visa (Visa Application)</label>
                        <label><input type="radio" name="jenis_surat" value="Survei" onchange="updatePreview()"> Survei (Survey)</label>
                        <label><input type="radio" name="jenis_surat" value="Tugas Akhir" onchange="updatePreview()"> Tugas Akhir (Thesis)</label>
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
                            <td align="center">{{ $user->nim ?? '-' }}</td>
                            <td>{{ $user->name ?? '-' }}</td>
                            <td align="center">{{ $user->sks ?? 16 }}</td>
                            <td align="center">{{ $user->ipk ?? 3.43 }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="form-section" id="step-3">
                <div class="surat-preview">
                    <h3 id="preview-judul">SURAT KETERANGAN</h3>
                    <p style="text-align: left;" id="preview-pembuka">Rektor Universitas Tarumanagara menerangkan bahwa:</p>
                    
                    <div class="surat-grid">
                        <span id="lbl-nama">Nama</span><span>:</span><strong>{{ $user->name ?? '-' }}</strong>
                        <span id="lbl-nim">NIM</span><span>:</span><strong>{{ $user->nim ?? '-' }}</strong>
                        <span id="lbl-sks">SKS</span><span>:</span><strong>{{ $user->sks ?? 16 }}</strong>
                        <span id="lbl-ipk">IPK</span><span>:</span><strong>{{ $user->ipk ?? 3.43 }}</strong>
                        <span id="lbl-fakultas">Fakultas</span><span>:</span>
                        <select name="fakultas">
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                        </select>
                        <span id="lbl-jurusan">Jurusan/Prodi</span><span>:</span>
                        <select name="jurusan">
                            <option value="{{ $user->prodi ?? '-' }}">{{ $user->prodi ?? '-' }}</option>
                        </select>
                    </div>

                    <p style="text-align: justify;">
                        <span id="txt-body1">benar terdaftar sebagai mahasiswa Fakultas Teknologi Informasi Program Studi S1 Teknik Informatika, Universitas Tarumanagara. </span>
                        <span id="txt-body2">Surat keterangan ini dibuat untuk keperluan</span> 
                        <strong id="preview-keperluan">Beasiswa (Scholarship)</strong>.
                    </p>
                    
                    <p style="text-align: left; margin-top: 30px;">
                        Jakarta, <input type="date" name="tanggal_surat" value="{{ date('Y-m-d') }}" required><br>
                        <span id="txt-ttd1">a.n. Rektor</span><br>
                        <span id="txt-ttd2">Wakil Rektor 1</span><br><br><br><br>
                        Sri Tiatri, S.Psi., M.Si., Ph.D., Psikolog
                    </p>

                    <div class="persetujuan-box">
                        <label>
                            <input type="checkbox" name="persetujuan" id="persetujuan" value="1">
                            <span id="txt-persetujuan">Saya menyetujui dan tunduk atas semua peraturan di Universitas Tarumanagara, dan apabila dikemudian hari saya terbukti menyalahgunakan dokumen ini, saya bersedia mendapat sanksi.</span>
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    let currentStep = 1;
    const totalSteps = 3; 

    function startWizard() {
        document.getElementById('view-riwayat').style.display = 'none';
        document.getElementById('view-wizard').style.display = 'block';
        updateUI();
        updatePreview(); 
    }

    function changeStep(direction) {
        if (currentStep === 3 && direction === 1) {
            const isChecked = document.getElementById('persetujuan').checked;
            if (!isChecked) {
                alert('Anda belum melakukan cek Persetujuan.');
                return; 
            }
            document.getElementById('form-pengajuan').submit();
            return;
        }

        currentStep += direction;
        
        if (currentStep < 1) currentStep = 1;
        if (currentStep > totalSteps) currentStep = totalSteps;

        updateUI();
        
        if (currentStep === 3) {
            updatePreview(); 
        }
    }

    function updatePreview() {
        let bahasaTerpilih = document.querySelector('input[name="bahasa"]:checked').value;
        
        if (bahasaTerpilih === 'Inggris') {
            document.getElementById('preview-judul').innerText = 'CERTIFICATE OF ACTIVE STUDENT';
            document.getElementById('preview-pembuka').innerText = 'The Rector of Tarumanagara University certifies that:';
            document.getElementById('lbl-nama').innerText = 'Name';
            document.getElementById('lbl-nim').innerText = 'Student ID';
            document.getElementById('lbl-sks').innerText = 'Credits';
            document.getElementById('lbl-ipk').innerText = 'GPA';
            document.getElementById('lbl-fakultas').innerText = 'Faculty';
            document.getElementById('lbl-jurusan').innerText = 'Study Program';
            document.getElementById('txt-body1').innerText = 'is truly a registered student at the Faculty of Information Technology, Undergraduate Program of Informatics Engineering, Tarumanagara University. ';
            document.getElementById('txt-body2').innerText = 'This certificate is made for the purpose of';
            document.getElementById('txt-ttd1').innerText = 'on behalf of the Rector';
            document.getElementById('txt-ttd2').innerText = 'Vice Rector I';
            document.getElementById('txt-persetujuan').innerText = 'I agree and submit to all regulations at Tarumanagara University, and if in the future I am proven to have misused this document, I am willing to receive sanctions.';
        } else {
            document.getElementById('preview-judul').innerText = 'SURAT KETERANGAN';
            document.getElementById('preview-pembuka').innerText = 'Rektor Universitas Tarumanagara menerangkan bahwa:';
            document.getElementById('lbl-nama').innerText = 'Nama';
            document.getElementById('lbl-nim').innerText = 'NIM';
            document.getElementById('lbl-sks').innerText = 'SKS';
            document.getElementById('lbl-ipk').innerText = 'IPK';
            document.getElementById('lbl-fakultas').innerText = 'Fakultas';
            document.getElementById('lbl-jurusan').innerText = 'Jurusan/Prodi';
            document.getElementById('txt-body1').innerText = 'benar terdaftar sebagai mahasiswa Fakultas Teknologi Informasi Program Studi S1 Teknik Informatika, Universitas Tarumanagara. ';
            document.getElementById('txt-body2').innerText = 'Surat keterangan ini dibuat untuk keperluan';
            document.getElementById('txt-ttd1').innerText = 'a.n. Rektor';
            document.getElementById('txt-ttd2').innerText = 'Wakil Rektor 1';
            document.getElementById('txt-persetujuan').innerText = 'Saya menyetujui dan tunduk atas semua peraturan di Universitas Tarumanagara, dan apabila dikemudian hari saya terbukti menyalahgunakan dokumen ini, saya bersedia mendapat sanksi.';
        }

        let radioJenisSurat = document.querySelector('input[name="jenis_surat"]:checked');
        let teksKeperluan = radioJenisSurat.parentElement.innerText.trim();
        document.getElementById('preview-keperluan').innerText = teksKeperluan;
    }

    function updateUI() {
        for(let i=1; i<=4; i++) {
            let tab = document.getElementById('tab-'+i);
            if(tab) {
                if(i === currentStep) tab.classList.add('active');
                else tab.classList.remove('active');
            }
        }

        for(let i=1; i<=3; i++) {
            let section = document.getElementById('step-'+i);
            if(section) {
                if(i === currentStep) section.classList.add('active');
                else section.classList.remove('active');
            }
        }

        document.getElementById('btn-prev').style.display = currentStep === 1 ? 'none' : 'inline-block';
        document.getElementById('btn-next').innerText = currentStep === totalSteps ? 'Kirim Pengajuan' : 'Next >';
    }
</script>
@endsection