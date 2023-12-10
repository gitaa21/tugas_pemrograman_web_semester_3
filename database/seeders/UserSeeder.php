<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_user')->insert([
            'id_user'=>'101',
            'nama_user'=>'Dazai Osamu',
            'username'=>'Dazai',
            'password'=>Hash::make('dazaibsd'),
            'telp'=>'12345678',
            'email'=>'dazai@gmail.com',
            'jabatan'=>'Pustakawan'
        ]);
        DB::table('tb_user')->insert([
            'id_user'=>'102',
            'nama_user'=>'Nakahara Chuuya',
            'username'=>'Chuuya',
            'password'=>Hash::make('chuuyabsd'),
            'telp'=>'12345679',
            'email'=>'chuuya@gmail.com',
            'jabatan'=>'Staff Pustaka'
        ]);
        DB::table('tb_user')->insert([
            'id_user'=>'103',
            'nama_user'=>'Sabito',
            'username'=>'Sabito',
            'password'=>Hash::make('sabitobsd'),
            'telp'=>'12345675',
            'email'=>'sabito@gmail.com',
            'jabatan'=>'Staff Pustaka'
        ]);
    }
}
