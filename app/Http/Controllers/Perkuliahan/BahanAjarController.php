<?php

namespace App\Http\Controllers\Perkuliahan;

use App\Models\Perkuliahan\BahanAjar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BahanAjarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = \App\Models\Perkuliahan\BahanAjar::all(); 
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
    public function show(BahanAjar $bahanAjar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BahanAjar $bahanAjar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BahanAjar $bahanAjar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BahanAjar $bahanAjar)
    {
        //
    }
}