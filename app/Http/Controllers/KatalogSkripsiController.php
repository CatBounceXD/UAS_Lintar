<?php

namespace App\Http\Controllers;

use App\Models\KatalogSkripsi;
use Illuminate\Http\Request;

class KatalogSkripsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $skripsi = KatalogSkripsi::when($search, function ($query) use ($search) {
            $query->where('judul_skripsi', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('KatalogSkripsi', compact('skripsi'));
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
