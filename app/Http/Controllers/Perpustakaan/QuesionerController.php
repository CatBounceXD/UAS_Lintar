<?php

namespace app\Http\Controllers\Perpustakaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\perpustakaan\Quesioner;

class QuesionerController extends Controller
{
    public function index()
    {
        $quesioner = Quesioner::with('user')->get();

        return view(
            'perpustakaan.quesioner',
            compact('quesioner')
        );
    }

    public function create()
    {
        return view('perpustakaan.quesioner_create');
    }

    public function store(Request $request)
    {
        // Ambil semua data input dari form
        $data = $request->all();
        
        // Ambil ID user yang login, jika belum login otomatis isi dengan id 1 (Siswa 1)
        $data['user_id'] = auth()->id() ?? 1;

        // Simpan ke database melalui model
        Quesioner::create($data);

        // Redirect kembali ke halaman daftar kuesioner dengan pesan sukses
        return redirect('/quesioner')->with('success', 'Kuesioner berhasil disimpan!');
    }
}