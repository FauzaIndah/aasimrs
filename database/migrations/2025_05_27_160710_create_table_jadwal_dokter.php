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
        Schema::create('jadwal_dokter', function (Blueprint $table) {
            $table->id();
             $table->string('nama_dokter')->nullable();
            $table->string('spesialis')->nullable();
            $table->string('hari')->nullable();
            $table->string('jam_mulai')->nullable();
            $table->string('jam_selesai')->nullable();
            $table->string('ruangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_dokter');
    }
};
