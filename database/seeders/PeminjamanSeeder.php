<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_peminjaman')->insert([
            'id_peminjaman'=> '502',
            'id_buku'=>'303',
            'id_anggota'=>'402',
           'tanggal_peminjaman'=>'2023/12/01',
           'tanggal_jatuh_tempo'=>'2023/12/08',
           'tanggal_pengembalian'=>'2023/12/05',
            'denda'=>'0', 
            'status_pengembalian'=>'Belum',
            'id_user'=>'101',
        ]);
    }
}
