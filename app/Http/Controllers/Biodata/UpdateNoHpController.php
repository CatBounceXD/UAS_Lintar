<?php

namespace App\Http\Controllers\Biodata;

use App\Http\Controllers\Controller;
use App\Models\Biodata\BiodataMhs; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateNoHpController extends Controller
{
    public function index()
    {
        $mahasiswa = BiodataMhs::firstOrNew(['user_id' => Auth::id()]);

        return view('Biodata.updateNoHp', compact('mahasiswa'));
    }
}