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
        Schema::create('rekammedis', function (Blueprint $table) {
            $table->id();
            $table->string('nama pasien')->nullable();
            $table->string('poli')->nullable();
            $table->string('diaknosa')->nullable();
            $table->string('obat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekammedis');
    }
};
