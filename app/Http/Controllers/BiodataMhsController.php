<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\Biodata;           

class BiodataMhsController extends Controller 
{
    public function index()
    {
        
        $biodata = biodata::first();

        
        return view('biodataMhs', compact('biodata'));
    }
}