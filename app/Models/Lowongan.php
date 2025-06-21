<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lowongan extends Model
{
    protected $table = 'lowongan';

    protected $fillable = [
        'perusahaan_id',
        'banner',
        'judul',
        'deskripsi',
        'posisi',
        'kuota',
        'lokasi',
        'gender',
        'rentang_usia',
        'mulai_magang',
        'selesai_magang',
        'deadline_apply',
        'uang_saku'
    ];

    public function perusahaan(): BelongsTo
    {
        return $this->belongsTo(Perusahaan::class);
    }

    public function dokumen(): HasMany
    {
        return $this->hasMany(Dokumen::class);
    }

    public function pelamar()
    {
        return $this->belongsToMany(Mahasiswa::class, 'detail_apply', 'id_lowongan', 'id_mahasiswa')
            ->withPivot('tgl_apply', 'jam_apply', 'status');
    }

    use HasFactory;
}
