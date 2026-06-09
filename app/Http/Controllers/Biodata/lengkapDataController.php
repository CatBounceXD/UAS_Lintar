<?php

namespace App\Http\Controllers\Biodata;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Biodata\lengkapData;

class lengkapDataController extends Controller
{
    public function index()
    {
       
        $lengkapData = lengkapData::first();

        
        return view('Biodata.lengkapData', compact('lengkapData'));
    }
}