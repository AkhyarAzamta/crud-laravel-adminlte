<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Matkul;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view ('admin.mahasiswa.index',['mahasiswa'=>$mahasiswa]); 
    }

    public function downloadpdf()
{
    $mahasiswa = Mahasiswa::all();
    $pdf = PDF::loadview('admin.mahasiswa.pdf', ['mahasiswa' => $mahasiswa])->setOptions(['defaultFont' => 'sans-serif']);
    return $pdf->download('laporan_mhs.pdf');
}


    public function create()
    {
        $dosen = Dosen::all(); // Mengambil semua data dosen dari tabel dosen

        return view('admin.mahasiswa.create', compact('dosen')); // Mengirimkan data dosen ke view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'jenkel'    => 'required',
            'alamat'    => 'required',
            'hp'        => 'required',
            'jurusan'   => 'required',
            'email'     => 'required',
            'nidn_dosen'=> 'nullable|exists:dosen,nidn'
        ]);
    
        $mahasiswa = Mahasiswa::create([
            'nama'      => $request->nama,
            'jenkel'    => $request->jenkel,
            'alamat'    => $request->alamat,
            'hp'        => $request->hp,
            'jurusan'   => $request->jurusan,
            'email'     => $request->email,
            'nidn_dosen'=> $request->nidn_dosen
        ]);
    
        // Proses menyimpan foto dan no_ktp jika ada
    
        return redirect('/mahasiswa');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $dosen = Dosen::all(); // Ambil semua data dosen dari database
    
        return view('admin.mahasiswa.edit', [
            'mahasiswa' => $mahasiswa,
            'dosen' => $dosen, // Melewatkan data dosen ke view
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'jenkel'    => 'required',
            'alamat'    => 'required',
            'hp'        => 'required',
            'jurusan'   => 'required',
            'email'     => 'required',
            'nidn_dosen'=> 'nullable|exists:dosen,id' // Validasi bahwa nidn_dosen merupakan id yang valid dari tabel dosen
        ]);
    
        $mahasiswa = Mahasiswa::find($id);
    
        if (!$mahasiswa) {
            return redirect('/mahasiswa')->with('error', 'Mahasiswa not found.');
        }
    
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jenkel = $request->jenkel;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->hp = $request->hp;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->email = $request->email;
        $mahasiswa->nidn_dosen = $request->nidn_dosen; // Update nidn_dosen
    
        $mahasiswa->save();
    
        return redirect('/mahasiswa')->with('success', 'Mahasiswa updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        if ($request->has('search')) {
            $mahasiswa = Mahasiswa::where('nama','LIKE','%'.$request->search.'%')->get();
}
        else {
            $mahasiswa = Mahasiswa::all();
        }   

        return view('admin.mahasiswa.index',['mahasiswa' => $mahasiswa]);
    }

    public function dosen(){
       $dosen = Dosen::all();
       return view('admin.mahasiswa.dosen',['dosen' => $dosen]);
    }

    public function matkul()
    {
        $mahasiswa = Mahasiswa::all(); // Ambil semua data mahasiswa
        foreach ($mahasiswa as $mhs) {
            $mhs->matkuls = Matkul::where('mahasiswa_id', $mhs->id)->get();
        }
    
        return view('admin.matkul.show', compact('mahasiswa'));
    }
    
}