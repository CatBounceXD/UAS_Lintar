<?php

namespace App\Http\Controllers\perpustakaan;

use App\Http\Controllers\Controller;
use App\Models\perpustakaan\Quesioner;

class QuesionerController extends Controller
{
    public function index()
    {
        $quesioner = Quesioner::with('user')->get();

        return view(
            'perpustakaan.quesioner',
            compact('quesioner')
        );
    }
}