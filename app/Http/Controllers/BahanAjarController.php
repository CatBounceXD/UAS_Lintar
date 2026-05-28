<?php

namespace App\Http\Controllers;

use App\Models\BahanAjar;
use Illuminate\Http\Request;

class BahanAjarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = \App\Models\BahanAjar::all(); 
        return view('perkuliahan.BahanAjar', compact('materi'));
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
    public function show(Akademik_BahanAjar $akademik_BahanAjar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akademik_BahanAjar $akademik_BahanAjar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Akademik_BahanAjar $akademik_BahanAjar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akademik_BahanAjar $akademik_BahanAjar)
    {
        //
    }
}
