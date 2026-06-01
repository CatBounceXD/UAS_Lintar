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
    public function index()
    {
        // ambil semua data buku
        $buku = KatalogBuku::all();

        // kirim ke view
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
