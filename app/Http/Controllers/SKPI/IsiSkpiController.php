<?php

namespace App\Http\Controllers\SKPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class IsiSkpiController extends Controller
{

    public function index()
    {

        $listKegiatan = DB::table('isi_skpi')->get();
        
        $totalPoin = 0;
        foreach($listKegiatan as $kegiatan) {
            $totalPoin += 15; 
        }

        return view('skpi.index', compact('listKegiatan', 'totalPoin'));
    }

    public function create()
    {
        return view('skpi.tambah_kegiatan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori'    => 'required',
            'kegiatan'    => 'required',
            'tingkat'     => 'required',
            'klasifikasi' => 'required',
            'tgl_mulai'   => 'required|date',
            'tgl_selesai' => 'required|date',
            'file_bukti'  => 'required|mimes:jpg,png,pdf|max:10240',
        ]);

        $fileName = time() . '_' . uniqid() . '.' . $request->file_bukti->extension();
        $request->file_bukti->move(public_path('uploads/skpi'), $fileName);


        DB::table('isi_skpi')->insert([
            'kategori'    => $request->kategori,
            'jenis'       => $request->jenis ?? 'Mandiri',
            'kegiatan'    => $request->kegiatan,
            'tingkat'     => $request->tingkat,
            'klasifikasi' => $request->klasifikasi,
            'tgl_mulai'   => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'file_bukti'  => $fileName,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect('/isi-skpi')->with('success', 'Data SKPI berhasil ditambahkan!');
    }
}