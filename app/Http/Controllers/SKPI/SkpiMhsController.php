<?php

namespace App\Http\Controllers\SKPI;

use App\Http\Controllers\Controller; // WAJIB untuk sub-folder controller
use App\Models\SKPI\SkpiMhs;
use Illuminate\Http\Request;

class SkpiMhsController extends Controller
{
    public function index()
    {
        // Ambil data asli dari database, dilarang hardcode
        $skpiData = SkpiMhs::first(); 

        return view('skpi.bukti_skpi', compact('skpiData'));
    }

    public function show(SkpiMhs $skpiMhs)
    {
        return view('skpi.bukti_skpi', compact('skpiMhs'));
    }
}