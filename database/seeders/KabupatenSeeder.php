<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Kabupaten;

class KabupatenSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(database_path('data/kabupaten.json'));
        $data = json_decode($json, true);

        foreach ($data as $item) {
            Kabupaten::create([
                'id' => $item['id'],
                'provinsi_id' => $item['province_id'],
                'name' => $item['name'],
                'alt_name' => $item['alt_name'] ?? null,
                'latitude' => $item['latitude'] ?? null,
                'longitude' => $item['longitude'] ?? null,
            ]);
        }
    }
}
