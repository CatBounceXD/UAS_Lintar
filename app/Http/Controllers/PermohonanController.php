<?php

namespace App\Http\Controllers\SuratPermohonan;

use App\Http\Controllers\Controller; 
use App\Models\SuratPermohonan\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function index()
    {
        $riwayatPermohonan = Permohonan::orderBy('created_at', 'desc')->get();
        return view('layanan_mahasiswa.surat_permohonan', compact('riwayatPermohonan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bahasa' => 'required',
            'jenis_permohonan' => 'required',
            'nama_instansi' => 'required|string',
            'alamat_instansi' => 'required|string',
            'nim' => 'required|string',
            'nama' => 'required|string',
            'fakultas' => 'required|string',
            'sks' => 'required|integer',
            'ipk' => 'required|numeric',
            'nim_lain' => 'nullable|string',
            'keterangan_tujuan' => 'required|string',
            'tgl_awal' => 'required|date',
            'tgl_akhir' => 'required|date'
        ]);

        Permohonan::create($validated);
        
        return redirect()->back()->with('success', 'Surat permohonan berhasil diajukan.');
    }


    public function show(Permohonan $permohonan)
    {
        return view('layanan_mahasiswa.show_permohonan', compact('permohonan'));
    }
}