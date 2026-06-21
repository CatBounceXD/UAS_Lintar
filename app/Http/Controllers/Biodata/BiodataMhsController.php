<?php

namespace App\Http\Controllers\Biodata;

use App\Http\Controllers\Controller; 
use App\Models\Biodata\BiodataMhs; 
use Illuminate\Http\Request;


class BiodataMhsController extends Controller
{
    public function index()
    {
        $biodata = BiodataMhs::first();

        return view('Biodata.biodataMhs', compact('biodata'));
    }
}