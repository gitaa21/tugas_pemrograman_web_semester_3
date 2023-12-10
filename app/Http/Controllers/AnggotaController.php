<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Data Anggota';
        $q = $request->query('q');
        $anggotas = Anggota::where('nama_anggota', 'like', '%'. $q. '%')
            ->paginate(10)
            ->withQueryString();
        $no = $anggotas->firstItem();
        return view('anggota.index', compact('title','anggotas', 'q', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah anggota';
        $anggotas = Anggota::orderBy('nama_anggota')->get();
        return view('anggota.create', compact('title', 'anggotas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_anggota'=> 'required',
            'email_anggota'=> 'required',
            'telp_anggota'=> 'required',
            'alamat_anggota'=> 'required',
        ]);
        $anggota = new Anggota($request->all());
        $anggota->save();
        return redirect()->route('anggota.index')->with(['message' => 'Data Berhasil Ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
        dd($anggota);
        $title = 'Ubah Anggota';
        return view('anggota.edit', compact('title', 'anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        $anggota->update($request->all());
        return redirect()->route('anggota.index')->with(['message'=>'Data berhasil diubah!']);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
      $anggota->delete();
      return redirect()->route('anggota.index')->with(['message'=>'Data berhasil dihapus!']);  
    }
}
