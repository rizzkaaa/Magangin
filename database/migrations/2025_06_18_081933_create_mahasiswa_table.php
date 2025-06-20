<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
      
Schema::create('mahasiswa', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null')->onUpdate('cascade');
    $table->string('profil')->nullable();
    $table->string('nama')->nullable();
    $table->string('email')->nullable();
    $table->string('npm')->nullable();
    $table->string('universitas')->nullable();
    $table->string('tempat_lahir')->nullable();
    $table->date('tanggal_lahir')->nullable();
    $table->string('agama')->nullable();
    $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
    $table->string('provinsi')->nullable();
    $table->string('kabupaten')->nullable();
    $table->string('kecamatan')->nullable();
    $table->string('desa')->nullable();
    $table->text('alamat')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};