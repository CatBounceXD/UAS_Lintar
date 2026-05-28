<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\lengkapData; // Memanggil model baru

class lengkapDataController extends Controller
{
    public function index()
    {
       
        $lengkapData = lengkapData::first();

        
        return view('lengkapData', compact('lengkapData'));
    }
}