<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dosen extends Model
{
    protected $table = 'dosen';

    protected $fillable = [
        'user_id', 'nama_dosen', 'nip', 'universitas',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}