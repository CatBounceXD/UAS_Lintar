<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rps;

class RpsController extends Controller
{
    public function index()
    {
        $data_rps = Rps::all();
        return view('perkuliahan.rps', compact('data_rps'));
    }
}