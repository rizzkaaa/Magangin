<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanMagangTable extends Migration
{
    public function up(): void
    {
        Schema::create('kegiatan_magang', function (Blueprint $table) {
            $table->id('id_kegiatan');
            $table->unsignedBigInteger('id_magang');
            $table->date('tgl');
            $table->string('hari')->nullable(); // optional karena bisa diturunkan dari tgl
            $table->text('kegiatan');
            $table->string('bukti_kegiatan')->nullable(); // bisa berupa path/file URL
            $table->timestamps();

            // Foreign Key
            $table->foreign('id_magang')->references('id_magang')->on('magang')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kegiatan_magang');
    }
}
