@extends('layouts.main')

@section('page')
<style>
    .card-container { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
    .header-title { background-color: #333; color: white; padding: 10px 15px; font-weight: bold; border-radius: 4px; margin-bottom: 20px; }
    
    .btn-rounded { border-radius: 20px; padding: 8px 15px; border: 1px solid #ccc; background-color: #f9f9f9; cursor: pointer; transition: 0.3s; font-weight: bold;}
    .btn-rounded:hover { background-color: #e0e0e0; }
    .btn-blue { background-color: #0067b8; color: white; border: none; }
    .btn-blue:hover { background-color: #005da6; }
    
    .table-data { width: 100%; border-collapse: collapse; margin-top: 15px; }
    .table-data th, .table-data td { border: 1px solid #ddd; padding: 8px; text-align: left; font-size: 14px; }
    .table-data th { background-color: #f2f2f2; text-align: center; }
    .table-data tr:nth-child(even) { background-color: #f9f9f9; }
    
    .wizard-nav { display: flex; gap: 10px; margin-top: 20px; justify-content: flex-end; }
    .wizard-tabs { display: flex; background-color: #e0e0e0; margin-bottom: 15px; border-radius: 4px; overflow: hidden;}
    .tab-item { padding: 10px 15px; color: #666; font-weight: bold; border-right: 1px solid #ccc; flex: 1; text-align: center; }
    .tab-item.active { background-color: #333; color: white; }
    
    .form-section { display: none; padding: 20px; border: 1px solid #ddd; border-radius: 4px; }
    .form-section.active { display: block; }
    
    .input-group { display: flex; margin-bottom: 15px; border: 1px solid #ddd;}
    .input-label { width: 250px; background-color: #8fbc8f; padding: 15px; font-weight: bold; color: #000; }
    .input-control { flex: 1; padding: 15px; background-color: #f9f9f9; display: flex; flex-direction: column; gap: 10px; }
    
    .surat-preview { padding: 40px; border: 1px solid #ccc; font-family: 'Times New Roman', serif; text-align: center; background: white;}
    .surat-grid { display: grid; grid-template-columns: 150px 20px auto; text-align: left; margin: 20px auto; width: 70%; font-size: 16px;}
    .persetujuan-box { margin-top: 40px; background-color: #ffffe0; padding: 15px; border: 1px solid #e6e600; text-align: left; font-size: 14px; }
</style>

<div class="card-container">
    <div class="header-title">
        LAYANAN MAHASISWA - SURAT KETERANGAN
    </div>

    <div id="view-riwayat">
        <div style="text-align: right; margin-bottom: 15px;">
            <button class="btn-rounded" onclick="startWizard()">+ Buat Surat Baru</button>
        </div>

        <p style="font-weight: bold;">Daftar Riwayat Pembuatan Surat Keterangan</p>
        <table class="table-data">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="15%">Tanggal</th>
                    <th width="25%">No.Surat</th>
                    <th width="40%">Jenis Surat Keterangan</th>
                    <th width="15%">Bahasa</th>
                </tr>
            </thead>
            <tbody>
                @forelse($riwayatPengajuan ?? [] as $index => $riwayat)
                <tr>
                    <td align="center">{{ $index + 1 }}</td>
                    <td align="center">{{ $riwayat->tanggal_surat }}</td>
                    <td align="center">S-{{ $riwayat->id }}/UNTAR/2026</td>
                    <td>{{ $riwayat->jenis_surat }}</td>
                    <td align="center">{{ $riwayat->bahasa }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" align="center" style="padding: 20px; color: #777;">Belum ada riwayat pembuatan surat.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <form id="view-wizard" action="{{ route('layanan.store') }}" method="POST" style="display: none;">
        @csrf
        
        <div class="wizard-tabs">
            <div class="tab-item active" id="tab-1">L1. Jenis Layanan</div>
            <div class="tab-item" id="tab-2">L2. Data Mahasiswa</div>
            <div class="tab-item" id="tab-3">L3. Preview & Persetujuan</div>
        </div>

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
                </div>
            </div>
        </div>

        <div class="form-section" id="step-2">
            <p style="font-weight: bold; margin-bottom: 10px;">Verifikasi Data Anda:</p>
            <table class="table-data">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>NAMA MAHASISWA</th>
                        <th>SKS TOTAL</th>
                        <th>IPK</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">{{ Auth::user()->nim ?? '-' }}</td>
                        <td align="center">{{ Auth::user()->name ?? '-' }}</td>
                        <td align="center">{{ $totalSks ?? 0 }}</td>
                        <td align="center">{{ $ipk ?? 0 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-section" id="step-3">
            <div class="surat-preview">
                <h3 id="preview-judul" style="text-decoration: underline;">SURAT KETERANGAN</h3>
                <p style="text-align: left; margin-top: 30px;" id="preview-pembuka">Rektor Universitas Tarumanagara menerangkan bahwa:</p>

                <div class="surat-grid">
                    <span id="lbl-nama">Nama</span><span>:</span><strong>{{ Auth::user()->name ?? '-' }}</strong>
                    <span id="lbl-nim">NIM</span><span>:</span><strong>{{ Auth::user()->nim ?? '-' }}</strong>
                    <span id="lbl-jurusan">Program Studi</span><span>:</span><span>{{ Auth::user()->prodi ?? '-' }}</span>
                </div>

                <p style="text-align: justify; line-height: 1.6; margin-top: 20px;">
                    <span id="txt-body1">benar terdaftar sebagai mahasiswa Program Studi S1 {{ Auth::user()->prodi ?? '-' }}, Universitas Tarumanagara. </span>
                    <span id="txt-body2">Surat keterangan ini dibuat untuk keperluan</span> 
                    <strong id="preview-keperluan">Beasiswa (Scholarship)</strong>.
                </p>

                <p style="text-align: left; margin-top: 50px;">
                    Jakarta, <input type="date" name="tanggal_surat" value="{{ date('Y-m-d') }}" required style="padding: 5px;"><br>
                    <span id="txt-ttd1">a.n. Rektor</span><br>
                    <span id="txt-ttd2">Wakil Rektor 1</span><br><br><br><br><br>
                    <strong style="text-decoration: underline;">Sri Tiatri, S.Psi., M.Si., Ph.D., Psikolog</strong>
                </p>
            </div>

            <div class="persetujuan-box">
                <label style="cursor: pointer;">
                    <input type="checkbox" name="persetujuan" id="persetujuan" value="1" required>
                    <span id="txt-persetujuan" style="font-weight: bold; color: #b30000; margin-left: 5px;">Saya menyetujui dan tunduk atas semua peraturan di Universitas Tarumanagara, dan apabila dikemudian hari saya terbukti menyalahgunakan dokumen ini, saya bersedia mendapat sanksi.</span>
                </label>
            </div>
        </div>

        <div class="wizard-nav">
            <button type="button" class="btn-rounded" id="btn-prev" onclick="changeStep(-1)" style="display: none;">< Sebelumnya</button>
            <button type="button" class="btn-rounded btn-blue" id="btn-next" onclick="changeStep(1)">Selanjutnya ></button>
        </div>
    </form>
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
        if (direction === 1 && currentStep < totalSteps) {
            currentStep++;
        } else if (direction === -1 && currentStep > 1) {
            currentStep--;
        } else if (direction === 1 && currentStep === totalSteps) {
            if(!document.getElementById('persetujuan').checked) {
                alert("Anda harus menyetujui persyaratan sebelum mengirim pengajuan!");
                return;
            }
            document.getElementById('view-wizard').submit();
            return;
        }
        updateUI();
        if (currentStep === 3) updatePreview(); 
    }

    function updatePreview() {
        let bahasaTerpilih = document.querySelector('input[name="bahasa"]:checked').value;
        let prodi = "{{ Auth::user()->prodi ?? '-' }}";
        
        if (bahasaTerpilih === 'Inggris') {
            document.getElementById('preview-judul').innerText = 'CERTIFICATE OF ACTIVE STUDENT';
            document.getElementById('preview-pembuka').innerText = 'The Rector of Tarumanagara University certifies that:';
            document.getElementById('lbl-nama').innerText = 'Name';
            document.getElementById('lbl-nim').innerText = 'Student ID';
            document.getElementById('lbl-jurusan').innerText = 'Study Program';
            document.getElementById('txt-body1').innerText = 'is truly a registered student at the Undergraduate Program of ' + prodi + ', Tarumanagara University. ';
            document.getElementById('txt-body2').innerText = 'This certificate is made for the purpose of ';
            document.getElementById('txt-ttd1').innerText = 'on behalf of the Rector';
            document.getElementById('txt-ttd2').innerText = 'Vice Rector I';
            document.getElementById('txt-persetujuan').innerText = 'I agree and submit to all regulations at Tarumanagara University, and if in the future I am proven to have misused this document, I am willing to receive sanctions.';
        } else {
            document.getElementById('preview-judul').innerText = 'SURAT KETERANGAN';
            document.getElementById('preview-pembuka').innerText = 'Rektor Universitas Tarumanagara menerangkan bahwa:';
            document.getElementById('lbl-nama').innerText = 'Nama';
            document.getElementById('lbl-nim').innerText = 'NIM';
            document.getElementById('lbl-jurusan').innerText = 'Program Studi';
            document.getElementById('txt-body1').innerText = 'benar terdaftar sebagai mahasiswa Program Studi S1 ' + prodi + ', Universitas Tarumanagara. ';
            document.getElementById('txt-body2').innerText = 'Surat keterangan ini dibuat untuk keperluan ';
            document.getElementById('txt-ttd1').innerText = 'a.n. Rektor';
            document.getElementById('txt-ttd2').innerText = 'Wakil Rektor 1';
            document.getElementById('txt-persetujuan').innerText = 'Saya menyetujui dan tunduk atas semua peraturan di Universitas Tarumanagara, dan apabila dikemudian hari saya terbukti menyalahgunakan dokumen ini, saya bersedia mendapat sanksi.';
        }

        let radioJenisSurat = document.querySelector('input[name="jenis_surat"]:checked');
        let teksKeperluan = radioJenisSurat.parentElement.innerText.replace(/Indonesia|Inggris/g, '').trim(); 
        document.getElementById('preview-keperluan').innerText = teksKeperluan;
    }

    function updateUI() {
        for(let i=1; i<=3; i++) {
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
        document.getElementById('btn-next').innerText = currentStep === totalSteps ? 'Kirim Pengajuan' : 'Selanjutnya >';
        
        if(currentStep === totalSteps) {
            document.getElementById('btn-next').style.backgroundColor = '#28a745';
        } else {
            document.getElementById('btn-next').style.backgroundColor = '#0067b8';
        }
    }
</script>
@endsection