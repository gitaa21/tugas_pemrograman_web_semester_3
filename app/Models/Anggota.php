<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'tb_anggota';
    protected $primaryKey = 'id_anggota';

    protected $fillable = ['id_anggota', 'nama_anggota','email_anggota','telp_anggota','alamat_anggota'];
}
