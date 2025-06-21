<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    use HasFactory;

    protected $table = 'magang';
    protected $primaryKey = 'id_magang';

    protected $fillable = [
        'id_peserta',
        'id_lowongan',
        'id_dosen',
        'nilai',
        'status',
    ];

    // Relasi
    public function peserta()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_peserta');
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'id_lowongan');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }

    public function kegiatanMagang()
    {
        return $this->hasMany(KegiatanMagang::class, 'id_magang');
    }
}
