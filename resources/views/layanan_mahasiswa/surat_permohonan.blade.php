@extends('layouts.main')

@section('page')
<style>
    .card-container { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
    .header-title { background-color: #b30000; color: white; padding: 10px 15px; font-weight: bold; border-radius: 4px; display: flex; justify-content: space-between; align-items: center; }
    
    .btn-rounded { border-radius: 20px; padding: 5px 15px; border: 1px solid #ccc; background-color: #f9f9f9; cursor: pointer; transition: 0.3s; }
    .btn-rounded:hover { background-color: #e0e0e0; }
    
    .table-data { width: 100%; border-collapse: collapse; margin-top: 15px; }
    .table-data th, .table-data td { border: 1px solid #ddd; padding: 8px; text-align: left; font-size: 14px; }
    .table-data th { background-color: #e0e0e0; text-align: center;}
    .table-data tr:nth-child(even) { background-color: #f9f9f9; }
    
    .wizard-nav { display: flex; gap: 5px; margin-bottom: 10px; justify-content: flex-end; }
    .wizard-tabs { display: flex; background-color: #e0e0e0; border: 1px solid #ccc; }
    .tab-item { padding: 10px; color: #888; font-weight: bold; flex: 1; text-align: center; border-right: 1px solid #ccc; }
    .tab-item.active { background-color: #333; color: white; }
    
    .form-section { display: none; padding: 20px; border: 1px solid #ccc; border-top: none; background-color: #f4f6f4;}
    .form-section.active { display: block; }
    
    .input-group { display: flex; margin-bottom: 5px; border-bottom: 1px solid #fff;}
    .input-label { width: 250px; background-color: #8fbc8f; padding: 10px; font-weight: bold; border-right: 2px solid white;}
    .input-control { flex: 1; padding: 10px; background-color: #a9a9a9; display: flex; flex-direction: column; gap: 8px; color: black;}
    
    .form-group-l2 { margin-bottom: 15px; }
    .form-group-l2 label { display: block; font-weight: bold; margin-bottom: 5px; }
    .form-group-l2 textarea { width: 100%; padding: 8px; border: 1px solid #ccc; }
    
    .table-mahasiswa { margin-left: 20px; margin-bottom: 15px; border-collapse: collapse; }
    .table-mahasiswa td { border: none; padding: 2px 5px; text-align: left; font-size: 14px; }
</style>

<div class="card-container">
    <div class="header-title">
        <span>LAYANAN MAHASISWA - SURAT PERMOHONAN</span>
    </div>

    <div id="view-riwayat">
        <div style="text-align: right; margin-top: 15px; margin-bottom: 15px;">
            <button class="btn-rounded" onclick="startWizard()">Buat Baru</button>
        </div>
        
        <p style="font-weight: bold;">Daftar Riwayat Pembuatan Surat Permohonan</p>
        <table class="table-data">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>Tanggal</th>
                    <th>No.Surat</th>
                    <th>Jenis Permohonan</th>
                    <th>Bahasa</th>
                    <th>View PDF</th>
                </tr>
            </thead>
            <tbody>
                @forelse($riwayatPengajuan as $index => $riwayat)
                <tr>
                    <td align="center">{{ $index + 1 }}</td>
                    <td align="center">{{ $riwayat->tanggal ?? date('Y-m-d') }}</td>
                    <td align="center">SP-{{ $riwayat->id }}/UNTAR/2026</td>
                    <td>{{ $riwayat->jenis_permohonan }}</td>
                    <td align="center">{{ $riwayat->bahasa }}</td>
                    <td align="center"><button class="btn-rounded" style="font-size: 12px;">PDF</button></td>
                </tr>
                @empty
                <tr><td colspan="6" align="center" style="background-color: white;">Belum ada riwayat.</td></tr>
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
            <div class="tab-item active" id="tab-1">L1. Jenis Permohonan</div>
            <div class="tab-item" id="tab-2">L2. Tujuan & Peserta</div>
            <div class="tab-item" id="tab-3">L3. Persetujuan</div>
            <div class="tab-item" id="tab-4">L4. Preview</div>
        </div>

        <form id="form-pengajuan" action="/surat-permohonan/store" method="POST">
            @csrf
            <div class="form-section active" id="step-1">
                <div class="input-group">
                    <div class="input-label">Bahasa</div>
                    <div class="input-control" style="background-color: #c0c0c0;">
                        <label><input type="radio" name="bahasa" value="Indonesia" checked onchange="updateL2Dynamic()"> Indonesia</label>
                        <label><input type="radio" name="bahasa" value="Inggris" onchange="updateL2Dynamic()"> Inggris</label>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-label">Jenis Surat Permohonan</div>
                    <div class="input-control" style="background-color: #c0c0c0;">
                        <label><input type="radio" name="jenis_surat" value="Kerja Praktik" checked onchange="updateL2Dynamic()"> Permohonan Kerja Praktik (Permission to Internship)</label>
                        <label><input type="radio" name="jenis_surat" value="Kunjungan" onchange="updateL2Dynamic()"> Permohonan Kunjungan (Permission to Research Visit)</label>
                        <label><input type="radio" name="jenis_surat" value="Beasiswa" onchange="updateL2Dynamic()"> Permohonan Pengajuan Beasiswa (Scholarship)</label>
                        <label><input type="radio" name="jenis_surat" value="Proposal" onchange="updateL2Dynamic()"> Permohonan Pengajuan Proposal (Permission to submission of Proposal)</label>
                        <label><input type="radio" name="jenis_surat" value="Survei" onchange="updateL2Dynamic()"> Permohonan Survei atau Riset (Permission to Research Survey)</label>
                        <label><input type="radio" name="jenis_surat" value="Visa" onchange="updateL2Dynamic()"> Permohonan Visa (Visa Application)</label>
                    </div>
                </div>
            </div>

            <div class="form-section" id="step-2" style="background-color: white;">
                <div class="form-group-l2">
                    <label id="lbl_kepada">Kepada Yth.</label>
                    <textarea id="nama_perusahaan" name="nama_perusahaan" rows="2" placeholder="Masukkan Nama & Tujuan Instansi/Perusahaan"></textarea>
                </div>
                
                <div class="form-group-l2">
                    <textarea id="alamat_perusahaan" name="alamat_perusahaan" rows="3" placeholder="Masukkan Alamat Instansi/Perusahaan"></textarea>
                </div>

                <p id="lbl_pembuka">Dengan hormat kami sampaikan, bahwa mahasiswa berikut:</p>
                
                <h4 style="color: #b30000; margin-left: 20px; margin-top: 10px; margin-bottom: 5px;" id="lbl_data_siswa">Siswa 1</h4>
                
                <table class="table-mahasiswa">
                    <tr><td width="100" id="lbl_nama">Nama</td><td width="15">:</td><td>{{ $user->name ?? 'Siswa 1' }}</td></tr>
                    <tr><td id="lbl_nim">NIM</td><td>:</td><td>{{ $user->nim ?? '535250001' }}</td></tr>
                    <tr><td id="lbl_fakultas">Fakultas</td><td>:</td><td id="val_fakultas">Teknologi Informasi</td></tr>
                    <tr><td id="lbl_sks">SKS</td><td>:</td><td>{{ $user->sks ?? '16' }}</td></tr>
                    <tr><td id="lbl_ipk">IPK</td><td>:</td><td>{{ $user->ipk ?? '3.31' }}</td></tr>
                </table>

                <div style="margin-bottom: 20px;">
                    <span style="color: red;">*</span><span id="lbl_nim_lain">Masukan NIM lain disini :</span> 
                    <input type="text" name="nim_tambahan" style="padding: 3px;">
                    <button type="button" id="btn_tambah">Tambah</button>
                    <button type="button" id="btn_clear">Clear</button>
                </div>

                <p id="lbl_bermaksud">Bermaksud mengajukan permohonan <strong>Kerja Praktik</strong> dalam rangka</p>
                <div style="margin-bottom: 20px;">
                    <label><input type="radio" name="tujuan_kegiatan" checked> <span id="lbl_tujuan_radio">memberikan pengalaman praktek dan penerapan teori pada program sarjana strata satu</span></label>
                </div>

                <div style="margin-bottom: 20px;">
                    <span style="color: red;">*</span><span id="lbl_waktu">Waktu Kegiatan :</span> 
                    <input type="date" id="tgl_awal" name="tgl_awal"> - <input type="date" id="tgl_akhir" name="tgl_akhir">
                </div>

                <p id="lbl_penutup" style="text-align: justify;">Kami mohon bantuan Bapak/Ibu kiranya dapat memberikan kesempatan bagi mahasiswa tersebut untuk melaksanakan kerja praktik di Instansi/Perusahaan Bapak/Ibu. Demikian yang dapat kami sampaikan, atas perhatian dan kerjasama yang baik kami ucapkan terima kasih.</p>
            </div>

            <div class="form-section" id="step-3" style="background-color: white;">
                <div style="background-color: #f9f9f9; padding: 15px; border: 1px solid #ddd;">
                    <input type="checkbox" id="persetujuan" value="1"> 
                    Saya menyetujui atas semua peraturan di Universitas Tarumanagara, dan apabila dikemudian hari saya terbukti menyalahgunakan dokumen ini, saya bersedia mendapat sanksi.
                </div>
            </div>

            <div class="form-section" id="step-4" style="background-color: white;">
                <h3 style="text-align: center; margin-bottom: 20px;">PREVIEW SURAT PERMOHONAN</h3>
                
                <div style="border: 1px solid #ccc; padding: 30px; background-color: #fafafa;">
                    <table style="width: 100%; margin-bottom: 20px; font-size: 14px;">
                        <tr><td width="150"><strong>Bahasa</strong></td><td>: <span id="prev-bahasa"></span></td></tr>
                        <tr><td><strong>Jenis Surat</strong></td><td>: <span id="prev-jenis"></span></td></tr>
                    </table>

                    <hr style="border-top: 1px dashed #ccc; margin-bottom: 20px;">

                    <p><strong>Kepada Yth.</strong><br>
                    <span id="prev-perusahaan" style="font-weight: bold; font-size: 16px;">-</span><br>
                    <span id="prev-alamat">-</span></p>

                    <p style="margin-top: 20px;">Mahasiswa yang mengajukan:</p>
                    <ul style="margin-top: 5px;">
                        <li><strong>Data Siswa 1:</strong> {{ $user->name ?? 'Siswa 1' }} (NIM: {{ $user->nim ?? '535250001' }})</li>
                    </ul>

                    <p style="margin-top: 20px;"><strong>Waktu Kegiatan:</strong><br>
                    <span id="prev-waktu">-</span></p>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    let currentStep = 1;
    const totalSteps = 4;

    function startWizard() {
        document.getElementById('view-riwayat').style.display = 'none';
        document.getElementById('view-wizard').style.display = 'block';
        updateL2Dynamic(); 
        updateUI();
    }

    function updateL2Dynamic() {
        let lang = document.querySelector('input[name="bahasa"]:checked').value;
        let type = document.querySelector('input[name="jenis_surat"]:checked').value;

        if (lang === 'Inggris') {
            document.getElementById('lbl_kepada').innerText = "To:";
            document.getElementById('nama_perusahaan').placeholder = "Enter Name & Destination of Institution/Company";
            document.getElementById('alamat_perusahaan').placeholder = "Enter Address of Institution/Company";
            document.getElementById('lbl_pembuka').innerText = "We respectfully inform you that the following student:";
            
            document.getElementById('lbl_data_siswa').innerText = "Student 1";
            document.getElementById('lbl_nama').innerText = "Name";
            document.getElementById('lbl_nim').innerText = "Student ID";
            document.getElementById('lbl_fakultas').innerText = "Faculty";
            document.getElementById('val_fakultas').innerText = "Faculty of Information Technology";
            document.getElementById('lbl_sks').innerText = "Credits";
            document.getElementById('lbl_ipk').innerText = "GPA";

            document.getElementById('lbl_nim_lain').innerText = "Enter other Student ID here :";
            document.getElementById('btn_tambah').innerText = "Add";
            document.getElementById('btn_clear').innerText = "Clear";
            document.getElementById('lbl_waktu').innerText = "Activity Period :";
            
            let typeEN = type === 'Kerja Praktik' ? "Internship" : type === 'Kunjungan' ? "Research Visit" : type === 'Beasiswa' ? "Scholarship" : type === 'Proposal' ? "Proposal Submission" : type === 'Survei' ? "Research Survey" : "Visa Application";
            let reasonEN = type === 'Kerja Praktik' ? "provide practical experience and application of theory" : type === 'Kunjungan' ? "conduct a research visit" : "fulfill academic requirements";

            document.getElementById('lbl_bermaksud').innerHTML = `Intends to submit a <strong>${typeEN}</strong> application in order to`;
            document.getElementById('lbl_tujuan_radio').innerText = reasonEN;
            document.getElementById('lbl_penutup').innerText = `We kindly request your assistance to provide the opportunity for the student to carry out the ${typeEN.toLowerCase()} at your Institution/Company. Thank you for your attention and cooperation.`;
        } else {
            document.getElementById('lbl_kepada').innerText = "Kepada Yth.";
            document.getElementById('nama_perusahaan').placeholder = "Masukkan Nama & Tujuan Instansi/Perusahaan";
            document.getElementById('alamat_perusahaan').placeholder = "Masukkan Alamat Instansi/Perusahaan";
            document.getElementById('lbl_pembuka').innerText = "Dengan hormat kami sampaikan, bahwa mahasiswa berikut:";
            
            document.getElementById('lbl_data_siswa').innerText = "Siswa 1";
            document.getElementById('lbl_nama').innerText = "Nama";
            document.getElementById('lbl_nim').innerText = "NIM";
            document.getElementById('lbl_fakultas').innerText = "Fakultas";
            document.getElementById('val_fakultas').innerText = "Teknologi Informasi";
            document.getElementById('lbl_sks').innerText = "SKS";
            document.getElementById('lbl_ipk').innerText = "IPK";

            document.getElementById('lbl_nim_lain').innerText = "Masukan NIM lain disini :";
            document.getElementById('btn_tambah').innerText = "Tambah";
            document.getElementById('btn_clear').innerText = "Clear";
            document.getElementById('lbl_waktu').innerText = "Waktu Kegiatan :";

            let reasonID = type === 'Kerja Praktik' ? "memberikan pengalaman praktek dan penerapan teori pada program sarjana strata satu" : type === 'Kunjungan' ? "melakukan kunjungan riset/penelitian" : "memenuhi persyaratan akademik";

            document.getElementById('lbl_bermaksud').innerHTML = `Bermaksud mengajukan permohonan <strong>${type}</strong> dalam rangka`;
            document.getElementById('lbl_tujuan_radio').innerText = reasonID;
            document.getElementById('lbl_penutup').innerText = `Kami mohon bantuan Bapak/Ibu kiranya dapat memberikan kesempatan bagi mahasiswa tersebut untuk melaksanakan ${type.toLowerCase()} di Instansi/Perusahaan Bapak/Ibu. Demikian yang dapat kami sampaikan, atas perhatian dan kerjasama yang baik kami ucapkan terima kasih.`;
        }
    }

    function changeStep(direction) {
        if (currentStep === 2 && direction === 1) {
            let namaPerusahaan = document.getElementById('nama_perusahaan').value.trim();
            if (namaPerusahaan === '') {
                alert('Anda belum mengisi nama perusahaan.');
                return;
            }
        }

        if (currentStep === 3 && direction === 1) {
            if (!document.getElementById('persetujuan').checked) {
                alert('Silakan centang persetujuan terlebih dahulu!');
                return;
            }
        }
        
        if (currentStep === 4 && direction === 1) {
            document.getElementById('form-pengajuan').submit();
            return;
        }

        document.getElementById('step-'+currentStep).classList.remove('active');
        document.getElementById('tab-'+currentStep).classList.remove('active');
        
        currentStep += direction;
        
        document.getElementById('step-'+currentStep).classList.add('active');
        document.getElementById('tab-'+currentStep).classList.add('active');
        
        if (currentStep === 4) {
            updatePreviewData();
        }

        updateUI();
    }

    function updatePreviewData() {
        let radioBahasa = document.querySelector('input[name="bahasa"]:checked');
        let radioJenis = document.querySelector('input[name="jenis_surat"]:checked');
        
        document.getElementById('prev-bahasa').innerText = radioBahasa ? radioBahasa.value : '-';
        document.getElementById('prev-jenis').innerText = radioJenis ? radioJenis.parentElement.innerText.trim() : '-';

        let perusahaan = document.getElementById('nama_perusahaan').value;
        let alamat = document.getElementById('alamat_perusahaan').value;
        let tglAwal = document.getElementById('tgl_awal').value;
        let tglAkhir = document.getElementById('tgl_akhir').value;

        document.getElementById('prev-perusahaan').innerText = perusahaan ? perusahaan : '-';
        document.getElementById('prev-alamat').innerText = alamat ? alamat : '-';
        
        if(tglAwal && tglAkhir) {
            document.getElementById('prev-waktu').innerText = tglAwal + " s/d " + tglAkhir;
        } else {
            document.getElementById('prev-waktu').innerText = "Belum diisi";
        }
    }

    function updateUI() {
        document.getElementById('btn-prev').style.display = currentStep === 1 ? 'none' : 'inline-block';
        document.getElementById('btn-next').innerText = currentStep === totalSteps ? 'Kirim Pengajuan' : 'Next >';
    }
</script>
@endsection