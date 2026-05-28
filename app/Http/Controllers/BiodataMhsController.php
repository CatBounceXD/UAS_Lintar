<?php

namespace App\Http\Controllers;

use App\Models\biodataMhs; 
use Illuminate\Http\Request;

class BiodataMhsController extends Controller
{
    public function index()
    {
        $biodata = biodataMhs::first();

        return view('biodataMhs', compact('biodata'));
    }
}