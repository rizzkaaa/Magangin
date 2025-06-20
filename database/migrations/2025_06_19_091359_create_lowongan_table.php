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
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perusahaan_id')->nullable()->constrained('perusahaan')->onDelete('set null')->onUpdate('cascade');
            $table->string('banner');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('posisi');
            $table->string('kuota');
            $table->string('lokasi');
            $table->enum('gender', ['Perempuan', 'Laki-laki']);
            $table->string('rentang_usia');
            $table->date('mulai_magang');
            $table->date('selesai_magang');
            $table->date('deadline_apply');
            $table->string('uang_saku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan');
    }
};
