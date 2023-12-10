<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'tb_buku';
    protected $primaryKey = 'id_buku';

    protected $fillable = ['id_kategori', 'judul_buku','pengarang','penerbit','tahun_terbit'];
}
