<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';


    protected $fillable = [
        'user_id',
        'npm',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'status',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'alamat',
        "status"
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function magangs()
    {
        return $this->hasMany(Magang::class, 'id_mahasiswa');
    }

    public function appliedLowongans()
    {
        return $this->belongsToMany(Magang::class, 'detail_apply', 'id_mahasiswa', 'id_lowongan')
            ->withPivot('tgl_apply', 'jam_apply', 'status', 'cv', 'dokumen1', 'dokumen2', 'dokumen3')
            ->withTimestamps();
    }
}
