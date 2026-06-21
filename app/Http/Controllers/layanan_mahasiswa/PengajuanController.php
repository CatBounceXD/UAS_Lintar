<?php

namespace App\Http\Controllers\layanan_mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\SuratKeterangan\Pengajuan;
use Illuminate\Http\Request;
use App\Models\User;

class PengajuanController extends Controller
{
    public function index()
    {
        $riwayatPengajuan = Pengajuan::orderBy('created_at', 'desc')->get();
        return view('layanan_mahasiswa.surat_keterangan', compact('riwayatPengajuan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bahasa' => 'required',
            'jenis_surat' => 'required',
            'nim' => 'required|string',
            'nama' => 'required|string',
            'sks' => 'required|integer',
            'ipk' => 'required|numeric',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'tanggal_surat' => 'required|date',
            'persetujuan' => 'accepted' 
        ]);

        $validated['persetujuan'] = $request->has('persetujuan') ? 1 : 0;
        
        Pengajuan::create($validated);
        
        return redirect()->back()->with('success', 'Surat keterangan berhasil diajukan.');
    }

    public function show(Pengajuan $pengajuan)
    {
        return view('surat_keterangan.show', compact('pengajuan'));
    }
}