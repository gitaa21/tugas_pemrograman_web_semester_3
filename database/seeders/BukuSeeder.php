<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bukuseeder extends Seeder
{
    public function run(): void
    {
        DB::table('tb_buku')->insert([
            'id_buku' => '201',
            'id_kategori' => '303',
            'judul_buku' => 'Harry Potter and the Sorcerers Stone',
            'pengarang' => 'J.K. Rowling',
            'penerbit' => 'Scholastic',
            'tahun_terbit' => '1997',
        ]);

        DB::table('tb_buku')->insert([
            'id_buku' => '202',
            'id_kategori' => '301',
            'judul_buku' => 'Laskar Pelangi',
            'pengarang' => 'Andrea Hirata',
            'penerbit' => 'Bentang Pustaka',
            'tahun_terbit' => '2005',
        ]);

        DB::table('tb_buku')->insert([
            'id_buku' => '203',
            'id_kategori' => '302',
            'judul_buku' => 'Bumi Manusia',
            'pengarang' => 'Pramoedya Ananta Toer',
            'penerbit' => 'Hasta Mitra',
            'tahun_terbit' => '1980',
        ]);

        DB::table('tb_buku')->insert([
            'id_buku' => '204',
            'id_kategori' => '303',
            'judul_buku' => 'The Hobbit',
            'pengarang' => 'J.R.R. Tolkien',
            'penerbit' => 'George Allen & Unwin',
            'tahun_terbit' => '1937',
        ]);

        DB::table('tb_buku')->insert([
            'id_buku' => '205',
            'id_kategori' => '301',
            'judul_buku' => 'To Kill a Mockingbird',
            'pengarang' => 'Harper Lee',
            'penerbit' => 'J.B. Lippincott & Co.',
            'tahun_terbit' => '1960',
        ]);

        DB::table('tb_buku')->insert([
            'id_buku' => '206',
            'id_kategori' => '301',
            'judul_buku' => '1984',
            'pengarang' => 'George Orwell',
            'penerbit' => 'Secker & Warburg',
            'tahun_terbit' => '1949',
        ]);

        DB::table('tb_buku')->insert([
            'id_buku' => '207',
            'id_kategori' => '301',
            'judul_buku' => 'The Great Gatsby',
            'pengarang' => 'F. Scott Fitzgerald',
            'penerbit' => 'Charles Scribner\'s Sons',
            'tahun_terbit' => '1925',
        ]);

        DB::table('tb_buku')->insert([
            'id_buku' => '208',
            'id_kategori' => '303',
            'judul_buku' => 'Harry Potter and the Philosopher\'s Stone',
            'pengarang' => 'J.K. Rowling',
            'penerbit' => 'Bloomsbury',
            'tahun_terbit' => '1997',
        ]);


        DB::table('tb_buku')->insert([
            'id_buku' => '209',
            'id_kategori' => '301',
            'judul_buku' => 'The Catcher in the Rye',
            'pengarang' => 'J.D. Salinger',
            'penerbit' => 'Little, Brown and Company',
            'tahun_terbit' => '1951',
        ]);

        DB::table('tb_buku')->insert([
            'id_buku' => '210',
            'id_kategori' => '303',
            'judul_buku' => 'The Lord of the Rings',
            'pengarang' => 'J.R.R. Tolkien',
            'penerbit' => 'George Allen & Unwin',
            'tahun_terbit' => '1954',
        ]);
        DB::table('tb_buku')->insert([
            'id_buku' => '211',
            'id_kategori' => '302',
            'judul_buku' => 'A House for Mr Biswas',
            'pengarang' => 'V.S. Naipaul',
            'penerbit' => 'Andre Deutsch',
            'tahun_terbit' => '1961',
        ]);
        
        DB::table('tb_buku')->insert([
            'id_buku' => '212',
            'id_kategori' => '301',
            'judul_buku' => 'Brave New World',
            'pengarang' => 'Aldous Huxley',
            'penerbit' => 'Chatto & Windus',
            'tahun_terbit' => '1932',
        ]);
        
        DB::table('tb_buku')->insert([
            'id_buku' => '213',
            'id_kategori' => '303',
            'judul_buku' => 'The Chronicles of Narnia',
            'pengarang' => 'C.S. Lewis',
            'penerbit' => 'Geoffrey Bles',
            'tahun_terbit' => '1950',
        ]);
        
        DB::table('tb_buku')->insert([
            'id_buku' => '214',
            'id_kategori' => '302',
            'judul_buku' => 'One Hundred Years of Solitude',
            'pengarang' => 'Gabriel Garcia Marquez',
            'penerbit' => 'Editorial Sudamericana',
            'tahun_terbit' => '1967',
        ]);
        
        DB::table('tb_buku')->insert([
            'id_buku' => '215',
            'id_kategori' => '301',
            'judul_buku' => 'Pride and Prejudice',
            'pengarang' => 'Jane Austen',
            'penerbit' => 'T. Egerton, Whitehall',
            'tahun_terbit' => '1813',
        ]);
        

    }
}
