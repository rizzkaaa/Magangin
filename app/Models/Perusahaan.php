<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';

    protected $fillable = [
    'user_id', 'nama_perusahaan', 'alamat', 'email_perusahaan',
    'provinsi', 'kabupaten', 'kecamatan'
];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}