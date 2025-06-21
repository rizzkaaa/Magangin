<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanMagang extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_magang';
    protected $primaryKey = 'id_kegiatan';

    protected $fillable = [
        'id_magang',
        'tgl',
        'hari',
        'kegiatan',
        'bukti_kegiatan',
    ];

    public function magang()
    {
        return $this->belongsTo(Magang::class, 'id_magang');
    }

    public function magangs()
    {
        return $this->hasMany(Magang::class, 'id_lowongan');
    }
}
