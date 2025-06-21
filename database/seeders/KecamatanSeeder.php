<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Kecamatan;

class KecamatanSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(database_path('data/kecamatan.json'));
        $data = json_decode($json, true);

        foreach ($data as $item) {
            Kecamatan::create([
                'id' => $item['id'],
                'kabupaten_id' => $item['regency_id'],
                'name' => $item['name'],
                'alt_name' => $item['alt_name'] ?? null,
                'latitude' => $item['latitude'] ?? null,
                'longitude' => $item['longitude'] ?? null,
            ]);
        }
    }
}
