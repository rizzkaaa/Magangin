<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    public $incrementing = false; // <- wajib jika id bukan auto-increment
    protected $keyType = 'string'; // <- wajib jika id berupa string

    protected $fillable = ['id', 'name', 'alt_name', 'latitude', 'longitude'];

    public function kabupatens()
    {
        return $this->hasMany(Kabupaten::class);
    }
}
