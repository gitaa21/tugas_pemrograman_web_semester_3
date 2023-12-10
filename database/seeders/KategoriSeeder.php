<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_kategori')->insert([
            'id_kategori'  => '301',
            'nama_kategori' => 'Fiksi',
        ]);

        DB::table('tb_kategori')->insert([
            'id_kategori'  => '302',
            'nama_kategori' => 'Non Fiksi',
        ]);

        DB::table('tb_kategori')->insert([
            'id_kategori'  => '303',
            'nama_kategori' => 'Fantasi',
        ]);
    }
    }
