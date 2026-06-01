<?php

namespace App\Http\Controllers\Perkuliahan;

use Illuminate\Http\Request;
use App\Models\Perkuliahan\Rps;
use App\Http\Controllers\Controller;

class RpsController extends Controller
{
    public function index()
    {
        $data_rps = Rps::all();
        return view('perkuliahan.rps', compact('data_rps'));
    }
}