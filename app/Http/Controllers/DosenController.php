<?php

namespace App\Http\Controllers;

use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        // Ambil semua data dosen beserta relasi mahasiswanya
        $dosen = Dosen::with('mahasiswa')->get();

        return view('dosen.index', compact('dosen'));
    }
}
