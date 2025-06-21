<?php

// app/Models/Kabupaten.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id', 'provinsi_id', 'name', 'alt_name', 'latitude', 'longitude'];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kecamatans()
    {
        return $this->hasMany(Kecamatan::class);
    }
}

