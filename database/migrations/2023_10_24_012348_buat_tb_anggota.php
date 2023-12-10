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
        Schema::create('tb_anggota', function (Blueprint $table) {
            $table->id('id_anggota');
            $table->string('nama_anggota', 255);
            $table->string('email_anggota', 100)->unique();
            $table->string('telp_anggota', 16)->nullable();
            $table->string('alamat_anggota', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_anggota');
    }
};
