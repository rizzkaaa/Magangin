<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    
protected $fillable = [
    'user_id', 'npm', 'nama', 'jenis_kelamin', 'tempat_lahir',
    'tanggal_lahir', 'agama', 'status', 'provinsi', 'kabupaten',
    'kecamatan', 'alamat'
];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}