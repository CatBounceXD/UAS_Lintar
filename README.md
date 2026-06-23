# Proyek UAS LINTAR

Proyek ini adalah simulasi web akademik mahasiswa Universitas Tarumanagara (LINTAR) yang dikembangkan menggunakan framework Laravel. Sistem ini dirancang secara dinamis untuk menangani berbagai kebutuhan administratif mahasiswa, mulai dari pencetakan tagihan uang kuliah, pengajuan surat keterangan, hingga manajemen dokumen SKPI.

## Kelompok 03
* 535250154 - Steven Pratama
* 535250175 - Yael Rehuellah
* 535250167 - Sekar Aruma Putri
* 535250177 - Syafiqa Aida Purwati
* 535250159 - Sumayya Kaylani

## Feature

### 1. Keamanan dan Autentikasi
* Modifikasi sistem registrasi bawaan Laravel Breeze untuk menggunakan Nomor Induk Mahasiswa (NIM).
* Proteksi rute menggunakan Middleware untuk memastikan sistem hanya dapat diakses oleh sesi pengguna yang valid.
* Pencegahan celah untuk CSRF, Cross Site Scripting dan
* Penerapan validasi input yang ketat (Form Request Validation) dan perlindungan Mass Assignment pada tingkat Model.

### 2. Feature Akademik
* Menampilkan informasi krusial seperti Histori Nilai, Kartu Studi Mahasiswa (KSM), Kartu Hasil Studi (KHS), dan Transkrip Nilai.
* Perhitungan otomatis Indeks Prestasi Kumulatif (IPK) dan Satuan Kredit Semester (SKS) secara real-time yang ditarik langsung dari tabel `studi_mahasiswa`.

### 3. Feature Uang Kuliah
* Auto-Generate Tagihan: Tagihan biaya kuliah dan SKS akan diproduksi secara otomatis oleh sistem ketika mahasiswa pertama kali membuka menu keuangan.
* Nominal tagihan dihitung secara dinamis berdasarkan beban SKS aktual yang diambil oleh mahasiswa tersebut.
* Fitur pemilihan skema pembayaran (Full Payment atau Termin/Cicilan) yang langsung terintegrasi dengan status tagihan.

### 4. Feature Layanan Mahasiswa
* Form pengajuan Surat Keterangan (untuk keperluan Beasiswa, Magang, dll) yang dilengkapi dengan pratinjau (preview) dokumen secara langsung.
* Form pengajuan Surat Permohonan dengan validasi kronologi tanggal yang ketat.

### 5. Feature SKPI dan Biodata
* Manajemen Surat Keterangan Pendamping Ijazah (SKPI) yang memungkinkan mahasiswa untuk mengunggah dan mengelola bukti sertifikat kegiatan.
* Pembaruan data diri secara mandiri, termasuk pembaruan Nomor HP yang aman.

### 6. Feature Perpustakaan
* Akses ke Katalog Buku dan Katalog Skripsi.
* Fitur pengisian kuesioner evaluasi layanan perpustakaan yang telah diamankan dari injeksi data.

## Panduan Instalasi

Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi di lingkungan lokal:

1. Clone repositori proyek ini ke dalam direktori lokal Anda.
   ```bash
   git clone [URL_REPOSITORY_ANDA]

2. Masuk ke dalam direktori proyek.
    ``` Bash
    cd uas_lintar

3. Instal seluruh dependensi PHP yang dibutuhkan menggunakan Composer.
    ```Bash
    composer install

4. Buat salinan konfigurasi environment.
    ```Bash
    cp .env.example .env

5. Buka file .env yang baru saja dibuat, lalu sesuaikan kredensial database Anda (`DB_DATABASE`).


6. Bangun struktur tabel database beserta data tiruan (dummy data) menggunakan perintah migrasi dan seeder.
    ```Bash
    php artisan migrate:fresh --seed

Catatan: Pastikan langkah ini berhasil tanpa pesan error pelanggaran Foreign Key.

7. Hidupkan Apache dan MySql dari XAMPP lalu Jalankan server
    ```Bash
    php artisan serve

9. Buka browser Anda dan akses aplikasi melalui http://localhost:8000.