<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Data Buku';
        $q = $request->query('q');
        $bukus = Buku::where('judul_buku', 'like', '%'. $q. '%')
            ->leftJoin('tb_kategori', 'tb_kategori.id_kategori', 'tb_buku.id_kategori')
            ->paginate(10)
            ->withQueryString();
        $no = $bukus->firstItem();
        return view('buku.index', compact('title','bukus', 'q', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Buku';
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('buku.create', compact('title', 'kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku'=> 'required',
            'id_kategori'=> 'required',
            'pengarang'=> 'required',
            'penerbit'=> 'required',
            'tahun_terbit'=> 'required',
        ]);
        $buku = new Buku($request->all());
        $buku->save();
        return redirect()->route('buku.index')->with(['message' => 'Data Berhasil Ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        $title = 'Ubah Buku';
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('buku.edit', compact('title', 'buku', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $buku->update($request->all());
        return redirect()->route('buku.index')->with(['message'=>'Data berhasil diubah!']);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
      $buku->delete();
      return redirect()->route('buku.index')->with(['message'=>'Data berhasil dihapus!']);  
    }
}
