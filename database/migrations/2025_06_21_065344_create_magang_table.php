<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagangTable extends Migration
{
    public function up(): void
    {
        Schema::create('magang', function (Blueprint $table) {
            $table->id('id_magang');
            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_lowongan');
            $table->unsignedBigInteger('id_dosen');
            $table->decimal('nilai', 5, 2)->nullable(); // misalnya nilai dalam skala 0-100
            $table->enum('status', ['Berlangsung', 'Selesai', 'Gagal'])->default('Berlangsung');
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa')->onDelete('cascade');
            $table->foreign('id_lowongan')->references('id')->on('lowongan')->onDelete('cascade');
            $table->foreign('id_dosen')->references('id')->on('dosen')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('magang');
    }
}
