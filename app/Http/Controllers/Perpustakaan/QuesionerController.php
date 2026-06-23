<?php

namespace App\Http\Controllers\Perpustakaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perpustakaan\Quesioner;
use Illuminate\Support\Facades\Auth;
class QuesionerController extends Controller
{
    public function index()
    {
        $quesioner = Quesioner::with('user')
                        ->where('user_id', Auth::id())
                        ->get();

        return view('perpustakaan.quesioner', compact('quesioner'));
    }

    public function create()
    {
        return view('perpustakaan.quesioner_create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'frekuensi_kunjungan' => 'required|string|max:255',
            'alasan_kunjungan'    => 'required|string',
            'frekuensi_akses_web' => 'required|string|max:255',
            'alasan_akses_web'    => 'required|string',

            'p1' => 'required|integer',
            'p2' => 'required|integer', 'alasan_p2' => 'nullable|string|max:255',
            'p3' => 'required|integer', 'alasan_p3' => 'nullable|string|max:255',
            'p4' => 'required|integer',
            'p5' => 'required|integer', 'alasan_p5' => 'nullable|string|max:255',
            'p6' => 'required|integer', 'alasan_p6' => 'nullable|string|max:255',
            'p7' => 'required|integer', 'alasan_p7' => 'nullable|string|max:255',
            'p8' => 'required|integer', 'alasan_p8' => 'nullable|string|max:255',

            'i1' => 'required|integer', 'alasan_i1' => 'nullable|string|max:255',
            'i2' => 'required|integer', 'alasan_i2' => 'nullable|string|max:255',
            'i3' => 'required|integer',
            'i4' => 'required|integer', 'alasan_i4' => 'nullable|string|max:255',
            'i5' => 'required|integer', 'alasan_i5' => 'nullable|string|max:255',
            'i6' => 'required|integer',
            'i7' => 'required|integer',
            'i8' => 'required|integer', 'alasan_i8' => 'nullable|string|max:255',

            'r1' => 'required|integer', 'alasan_r1' => 'nullable|string|max:255',
            'r2' => 'required|integer', 'alasan_r2' => 'nullable|string|max:255',
            'r3' => 'required|integer', 'alasan_r3' => 'nullable|string|max:255',
            'r4' => 'required|integer', 'alasan_r4' => 'nullable|string|max:255',
            'r5' => 'required|integer', 'alasan_r5' => 'nullable|string|max:255',
            'r6' => 'required|integer', 'alasan_r6' => 'nullable|string|max:255',
            'r7' => 'required|integer', 'alasan_r7' => 'nullable|string|max:255',

            'saran' => 'nullable|string',
        ]);
        
        $validated['user_id'] = Auth::id();

        Quesioner::create($validated);

        return redirect('/quesioner')->with('success', 'Kuesioner berhasil disimpan!');
    }
}