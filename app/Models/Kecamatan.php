<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id', 'kabupaten_id', 'name', 'alt_name', 'latitude', 'longitude'];

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }
}

