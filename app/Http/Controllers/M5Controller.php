<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class M5Controller extends Controller
{
    public function lat1(Request $request)
    {
        return $request->all();
    }


    public function lat2()
    {
        return view('m5.lat2');
    }

    public function lat2Action(Request $request)
    {
        $request->validate([
            'nama'=> 'required|min:5',
            'nilai'=> 'required|numeric',
        ]);

        $nama = $request->input('nama');
        $nilai = $request->input('nilai');

        if ($nilai >= 60)
            $ket='Lulus';
        else
            $ket='Ulang';

        return view('m5.lat2_hasil', compact('nama', 'nilai', 'ket')); 
    }


    public function volume()
    {
        return view('m5.volume');
    }

    public function volumeAction(Request $request)
    {
        $request->validate([
            'panjang'=> 'required|numeric',
            'lebar'=> 'required|numeric',
            'tinggi'=> 'required|numeric',
        ]);

        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $tinggi = $request->input('tinggi');
        $volume = $panjang * $lebar * $tinggi;

        return view('m5.volume_hasil', compact('panjang', 'lebar', 'tinggi', 'volume')); 
    }

    public function luas()
    {
        return view('m5.luas');
    }

    public function luasAction(Request $request)
    {
        $request->validate([
            'alas'=> 'required|numeric',
            'tinggi'=> 'required|numeric',
        ]);

        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');
        $luas = 1/2*$alas* $tinggi;

        return view('m5.luas_hasil', compact('alas', 'tinggi', 'luas')); 
    }

    
}
   
