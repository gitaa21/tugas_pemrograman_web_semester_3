<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_peminjaman', function (Blueprint $table) {
            $table->id('id_peminjaman');
            $table->bigInteger('id_buku');
            $table->bigInteger('id_anggota');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_jatuh_tempo');
            $table->date('tanggal_pengembalian');
            $table->bigInteger('denda'); //Integer untuk angka
            $table->string('status_pengembalian', 15);
            $table->bigInteger('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_peminjaman');
    }
};
