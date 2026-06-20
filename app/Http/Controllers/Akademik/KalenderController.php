<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    public function index()
    {
        $kalender = \App\Models\Akademik\KalenderAkademik::all();
        return view('Akademik.kalender', compact('kalender'));
    }
}
