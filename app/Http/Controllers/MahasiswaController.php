<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
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

    public function downloadpdf(){
        $mahasiswa = Mahasiswa::all();
        $pdf = PDF::loadview('admin.mahasiswa.index',['mahasiswa'=>$mahasiswa])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_mhs.pdf');
        
    }

    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $this->validate($request,[
        'nama'      => 'required',
        'jenkel'    => 'required',
        'alamat'    => 'required',
        'hp'        => 'required',
        'jurusan'   => 'required',
        'email'     => 'required'
    ]);

    $mahasiswa = Mahasiswa::create([
        'nama'      => $request->nama,
        'jenkel'    => $request->jenkel,
        'alamat'    => $request->alamat,
        'hp'        => $request->hp,
        'jurusan'   => $request->jurusan,
        'email'     => $request->email
    ]);

    if($request->hasFile('foto')){
        $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
        $mahasiswa->foto = $request->file('foto')->getClientOriginalName();
        $mahasiswa->save();
    }

    if($request->hasFile('no_ktp')){
        $request->file('no_ktp')->move('images/', $request->file('no_ktp')->getClientOriginalName());
        $mahasiswa->no_ktp = $request->file('no_ktp')->getClientOriginalName();
        $mahasiswa->save();
    }

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
        return view('admin.mahasiswa.edit',['mahasiswa' => $mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama'      => 'required',
            'jenkel'    => 'required',
            'alamat'    => 'required',
            'hp'        => 'required',
            'jurusan'   => 'required',
            'email'     => 'required'
        ]);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());

        $mahasiswa->save();
        return redirect('/mahasiswa');
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

    public function matkul(){

        $mahasiswa = Mahasiswa::get();
        return view('admin.mahasiswa.matkul',['mahasiswa' => $mahasiswa]);
    }
}