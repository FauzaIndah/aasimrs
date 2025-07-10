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
       Schema::create('daftar', function (Blueprint $table) {
    $table->id();
    $table->string('nama_pasien')->nullable();
    $table->string('alamat')->nullable();
    $table->string('nik')->nullable();
    $table->string('handphone')->nullable();
    $table->string('tempat_lahir')->nullable();
    $table->string('tanggal_lahir')->nullable();
    $table->string('jenis_layanan_kesehatan')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar');
    }
};
