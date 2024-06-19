<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class MatkulController extends Controller
{
    /**
     * Menampilkan form untuk menambahkan mata kuliah untuk mahasiswa tertentu.
     */
    public function create($mahasiswa_id)
    {
        $mahasiswa = Mahasiswa::findOrFail($mahasiswa_id);
        $dosen = Dosen::all(); // Ambil semua data dosen

        return view('admin.matkul.create', compact('mahasiswa', 'dosen'));
    }

    /**
     * Menyimpan data mata kuliah yang ditambahkan untuk mahasiswa tertentu.
     */
    public function store(Request $request, $mahasiswa_id)
    {
        $request->validate([
            'nama_matkul' => 'required',
            'dosen_id' => 'required',
            'semester' => 'required',
            'nilai' => 'required',
        ]);

        $matkul = new Matkul([
            'mahasiswa_id' => $mahasiswa_id,
            'nama_matkul' => $request->nama_matkul,
            'dosen_id' => $request->dosen_id,
            'semester' => $request->semester,
            'nilai' => $request->nilai,
        ]);

        $matkul->save();

        return redirect()->route('mahasiswa.matkul', $mahasiswa_id)
                         ->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

    /**
     * Menampilkan daftar mata kuliah yang diambil oleh mahasiswa tertentu.
     */
    public function show($mahasiswa_id)
    {
        $mahasiswa = Mahasiswa::findOrFail($mahasiswa_id);
        $matkuls = Matkul::where('mahasiswa_id', $mahasiswa_id)->get();

        return view('admin.matkul.show', compact('mahasiswa', 'matkuls'));
    }

    /**
     * Menghapus mata kuliah dari daftar mata kuliah mahasiswa.
     */
    public function destroy($id)
    {
        $matkul = Matkul::findOrFail($id);
        $mahasiswa_id = $matkul->mahasiswa_id;
        $matkul->delete();

        return redirect()->route('mahasiswa.matkul', $mahasiswa_id)
                         ->with('success', 'Mata kuliah berhasil dihapus.');
    }
}
