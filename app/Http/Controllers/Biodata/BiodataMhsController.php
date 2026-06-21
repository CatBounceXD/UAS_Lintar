<?php

namespace App\Http\Controllers\Biodata;

use App\Http\Controllers\Controller; 
use App\Models\Biodata\BiodataMhs; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Biodata\Biodata;
use Illuminate\Support\Facades\Auth;


class BiodataMhsController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $biodata = biodata::where('user_id', $userId)->first();

        return view('Biodata.biodataMhs', compact('biodata'));
    }
}