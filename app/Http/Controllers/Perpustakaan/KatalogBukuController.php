<?php

namespace App\Http\Controllers\Perpustakaan;

use App\Models\Perpustakaan\KatalogBuku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KatalogBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) // 1. Menambahkan parameter Request $request di sini
    {
        // 2. Menggunakan query builder (bukan ::all()) agar bisa menyaring data secara fleksibel
        $query = KatalogBuku::query();

        // 3. Cek apakah user memilih salah satu lokasi perpustakaan di dropdown
        if ($request->filled('perpustakaan')) {
            $query->where('perpustakaan', $request->perpustakaan);
        }

        // 4. Cek apakah user mengetikkan kata kunci di kolom pencarian judul buku
        if ($request->filled('search')) {
            $query->where('judul_buku', 'like', '%' . $request->search . '%');
        }

        // 5. Eksekusi query untuk mengambil data yang sudah tersaring
        $buku = $query->get();

        // Kirim hasil akhir ke view
        return view('Perpustakaan.KatalogBuku', compact('buku'));
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
    public function show(katalogBuku $katalogBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(katalogBuku $katalogBuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, katalogBuku $katalogBuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(katalogBuku $katalogBuku)
    {
        //
    }
}