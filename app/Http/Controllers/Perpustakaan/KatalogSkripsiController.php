<?php

namespace App\Http\Controllers\Perpustakaan;

use App\Models\Perpustakaan\KatalogSkripsi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KatalogSkripsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // 1. Ambil data inputan dari form filter di blade view
        $search = $request->search;
        $fakultas = $request->fakultas; // <-- TAMBAHKAN INI

        // 2. Jalankan query kondisional menggunakan ketika (when)
        $skripsi = KatalogSkripsi::query()
            // Jika dropdown fakultas dipilih, jalankan filter ini
            ->when($fakultas, function ($query) use ($fakultas) {
                return $query->where('fakultas', $fakultas);
            })
            // Jika box pencarian diisi, jalankan filter ini
            ->when($search, function ($query) use ($search) {
                return $query->where('judul_skripsi', 'like', '%' . $search . '%')
                             ->orWhere('pengarang', 'like', '%' . $search . '%'); // Opsional: mencari berdasarkan pengarang juga
            })
            ->get(); // Tetap mempertahankan pagination 10 data kamu

        // 3. Kirim data variabel $skripsi ke view
        return view('Perpustakaan.KatalogSkripsi', compact('skripsi'));
    }
         

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KatalogSkripsi $katalogSkripsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KatalogSkripsi $katalogSkripsi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KatalogSkripsi $katalogSkripsi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KatalogSkripsi $katalogSkripsi)
    {
        //
    }
}