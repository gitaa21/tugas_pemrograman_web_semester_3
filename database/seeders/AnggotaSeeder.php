<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_anggota')->insert([
            'id_anggota'=> '401',
            'nama_anggota' => 'Lee Minho',
            'email_anggota' => 'minho@gmail.com',
            'telp_anggota' => '123456789',
            'alamat_anggota' => 'Jl. Distrik No. 9',
        ]);

        DB::table('tb_anggota')->insert([
            'id_anggota'=> '402',
            'nama_anggota' => 'Han Jisung',
            'email_anggota' => 'jisung@gmail.com',
            'telp_anggota' => '123456788',
            'alamat_anggota' => 'Jl. Levanter No. 8',
        ]);

        DB::table('tb_anggota')->insert([
            'id_anggota'=> '403',
            'nama_anggota' => 'Hwang Hyunjin',
            'email_anggota' => 'hyunjin@gmail.com',
            'telp_anggota' => '123456787',
            'alamat_anggota' => 'Jl. Placebo No. 8',
        ]);
    }
}
