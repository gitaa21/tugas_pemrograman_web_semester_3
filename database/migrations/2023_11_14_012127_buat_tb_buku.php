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
        Schema::create('tb_buku', function (Blueprint $table) {
            $table->id('id_buku');
            $table->bigInteger('id_kategori');
            $table->string('judul_buku', 255);
            $table->string('pengarang', 100);
            $table->string('penerbit', 100);
            $table->string('tahun_terbit', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_buku');
    }
};
