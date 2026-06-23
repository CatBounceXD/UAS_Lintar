@extends('layouts.main')

@section('page')
<style>
    .header-bar { 
        background-color: #333; 
        color: white; 
        padding: 10px 15px; 
        font-weight: bold; 
        font-size: 15px; 
        border-radius: 5px; 
        margin-bottom: 15px;
    }
    .alert-container { 
        border: 1px solid #ccc; 
        padding: 15px; 
        margin-top: 10px; 
        font-size: 14px; 
        border-radius: 5px;
    }
    .text-danger { font-weight: bold; color: #b30000; }
    
    .table-nohp { 
        border-collapse: collapse; 
        margin-top: 15px; 
        width: 100%; 
    }
    .table-nohp th, .table-nohp td { 
        border: 1px solid #ddd; 
        padding: 12px; 
        text-align: left; 
    }
    .table-nohp th { 
        background-color: #f2f2f2; 
        width: 30%; 
    }
    
    .input-hp { 
        width: 100%; 
        padding: 8px; 
        box-sizing: border-box; 
        border: 1px solid #ccc; 
        border-radius: 4px;
    }
    .btn-simpan { 
        background-color: #0067b8; 
        color: white; 
        border: none; 
        padding: 10px 20px; 
        cursor: pointer; 
        border-radius: 5px; 
        font-weight: bold;
    }
    .btn-simpan:hover { background-color: #005da6; }
</style>

<div class="header-bar">
    UPDATE NO HP
</div>

@if(!$mahasiswa || $mahasiswa->is_aktif_2021 == 0)
    
    <div class="alert-container" style="background-color: #f8d7da; border-color: #f5c6cb;">
        <p class="text-danger" style="margin-top: 0;">MOHON MAAF, ANDA TIDAK AKTIF PADA SEMESTER GANJIL 2021,</p>
        <p style="margin-bottom: 0;">Anda tidak berhak melakukan update No HP untuk mendapatkan bantuan Paket Internet.</p>
    </div>

@else

    <div class="alert-container" style="background-color: #e6f4ea; border-color: #c3e6cb; color: #155724;">
        Status Anda: <b>Aktif Terdaftar</b>. Silakan perbarui nomor Anda di bawah ini.
    </div>

    <form action="#" method="POST">
        @csrf
        <table class="table-nohp">
            <tr>
                <th>NPM</th>
                <td><b>{{ $mahasiswa->npm ?? Auth::user()->nim }}</b></td>
            </tr>
            <tr>
                <th>Nama Mahasiswa</th>
                <td>{{ $mahasiswa->nama_mahasiswa ?? Auth::user()->name }}</td>
            </tr>
            <tr>
                <th>No HP Sekarang</th>
                <td><input type="text" name="no_hp" value="{{ $mahasiswa->no_hp }}" class="input-hp"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right; background-color: #f9f9f9;">
                    <button type="submit" class="btn-simpan">Simpan Perubahan</button>
                </td>
            </tr>
        </table>
    </form>

@endif
@endsection