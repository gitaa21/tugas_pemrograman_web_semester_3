<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class M4Controller extends Controller
{
    public function lat1()
    {
        $nama = 'Dazai Osamu';
        $alamat = 'Jl Bungo No.21 Denpasar';
        return view('m4.lat1', compact('nama', 'alamat'));
    }

    public function lat2()
    {
        $nama = 'Dazai Osamu';
        $nilai = 90;
        return view('m4.lat2', compact('nama', 'nilai'));
    }

    public function lat3()
    {
        $nama = 'Dazai Osamu';
        $hobi = ['Membaca', 'Tidur', 'Ngoding', 'Nyanyi'];
        $skill = ['PHP', 'HTML', 'SQL', 'CSS', 'Laravel'];
        return view('m4.lat3', compact('nama', 'hobi', 'skill'));
    }

    public function m4_identitas()
    {
        $nama = 'Dazai Osamu';
        $alamat = 'Jl Bungo No.21 Denpasar';
        $ttl = 'Aomori, 19 Juni 1909';
        $jeniskelamin = 'Laki-Laki';
        return view('m4.identitas', compact('nama', 'alamat', 'ttl', 'jeniskelamin'));
    }

    public function m4_pendidikan()
    {
        $tk = 'TK PGRI Denpasar';
        $sd = 'SD Negeri 2 Kesiman';
        $smp = 'SMP Negeri 8 Denpasar';
        $smk = 'SMK Negeri 2Denpasar';
        $kuliah = 'Instiki';
        return view('m4.pendidikan', compact('tk', 'sd', 'smp', 'smk', 'kuliah'));
    }

    public function m4_skill()
    {
        $hardskill = ['PHP', 'HTML', 'SQL', 'CSS', 'Laravel'];
        $softskill = ['Disiplin', 'Team Work ', 'Mudah Bergaul', 'Publik Speaking'];
        return view('m4.skill', compact('hardskill', 'softskill'));
    }

    public function alamat()
    {
        $alamat = 'Jl Bungo No.21 Denpasar';
        return view('m4.alamat', compact('alamat'));
    }

    public function nilai()
    {
        $nilai = 70;
        return view('m4.nilai', compact('nilai'));
    }

    public function warna()
    {
        $warna = ['Red', 'Grenn', 'Blue'];
        return view('m4.warna', compact('warna'));
    }
}

