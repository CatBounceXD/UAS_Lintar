<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import model User
use Illuminate\Support\Facades\Auth; // Import Facade Auth

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user() ?? User::first();
        return view('home', compact('user'));
    }
}