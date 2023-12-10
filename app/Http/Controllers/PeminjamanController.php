<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Data Peminjaman';
        $q = $request->query('q');
        $peminjamans = Peminjaman::where('judul_buku', 'like', '%'. $q. '%')
            ->leftJoin('tb_buku', 'tb_buku.id_buku', 'tb_peminjaman.id_buku')
            ->leftJoin('tb_anggota', 'tb_anggota.id_anggota', 'tb_peminjaman.id_anggota')
            ->leftJoin('tb_user', 'tb_user.id_user', 'tb_peminjaman.id_user')
            ->paginate(10)
            ->withQueryString();
        $no = $peminjamans->firstItem();
        return view('peminjaman.index', compact('title','peminjamans', 'q', 'no'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Peminjaman';
        $bukus = Buku::orderBy('judul_buku')->get();
        return view('peminjaman.create', compact('title', 'bukus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_buku'=> 'required',
            'id_anggota'=> 'required',
            'tanggal_peminjaman'=> 'required',
            'tanggal_jatuh_tempo'=> 'required',
            'tanggal_pengembalian'=> 'required',
            'denda'=> 'required',
            'status_pengembalian'=> 'required',
        ]);
        $peminjaman = new Peminjaman($request->all());
        $peminjaman->id_user = Auth::id();
        $peminjaman->save();
        return redirect()->route('peminjaman.index')->with(['message' => 'Data Berhasil Ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        $title = 'Ubah Peminjaman';
        $bukus = Buku::orderBy('judul_buku')->get();
        return view('peminjaman.edit', compact('title', 'peminjaman', 'bukus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $peminjaman->update($request->all());
        return redirect()->route('peminjaman.index')->with(['message'=>'Data berhasil diubah!']);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
      $peminjaman->delete();
      return redirect()->route('peminjaman.index')->with(['message'=>'Data berhasil dihapus!']);  
    }
}
