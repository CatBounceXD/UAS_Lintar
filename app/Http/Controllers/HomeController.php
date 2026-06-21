<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user() ?? User::first();

        $pengumuman = Pengumuman::where('tipe', 'pengumuman')->get();
        $informasi = Pengumuman::where('tipe', 'informasi')->get();

        return view('home', compact('user', 'pengumuman', 'informasi'));
    }
}