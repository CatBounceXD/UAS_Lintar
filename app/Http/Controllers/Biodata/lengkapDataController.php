<?php

namespace App\Http\Controllers\Biodata;

use App\Http\Controllers\Controller;
use App\Models\Biodata\lengkapData;
use Illuminate\Support\Facades\Auth;

class lengkapDataController extends Controller
{

    public function index()
    {
        $userId = Auth::id();
        $lengkapData = lengkapData::where('user_id', $userId)->first();
        
        return view('Biodata.lengkapData', compact('lengkapData'));
    }
}