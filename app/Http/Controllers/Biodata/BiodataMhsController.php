<?php

namespace App\Http\Controllers\Biodata;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Biodata\Biodata;

class BiodataMhsController extends Controller 
{
    public function index()
    {
        
        $biodata = biodata::first();

        
        return view('Biodata.biodataMhs', compact('biodata'));
    }
}