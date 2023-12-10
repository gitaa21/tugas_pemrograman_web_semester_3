<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    use HasFactory;
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';

    protected $fillable = ['nama_user', 'username', 'password', 'telp', 'email', 'jabata'];
}
