<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'tb_peminjaman';
    protected $primaryKey = 'id_peminjaman';

    protected $fillable = ['id_buku', 'id_anggota', 'tanggal_peminjaman', 'tanggal_jatuh_tempo', 'tanggal_pengembalian', 'denda', 'status_pengembalian', 'id_user'];
}
