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
        Schema::create('farmasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat')->nullable();
            $table->string('kategori')->nullable();
            $table->string('dosis')->nullable();
            $table->string('harga')->nullable();
            $table->string('stok')->nullable();
            $table->string('tanggal_kadaluarsa')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmasi');
    }
};
