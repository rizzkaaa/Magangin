<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Provinsi;

class ProvinsiSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(database_path('data/provinsi.json'));
        $data = json_decode($json, true);

        foreach ($data as $item) {
            Provinsi::create([
                'id' => $item['id'],
                'name' => $item['name'],
                'alt_name' => $item['alt_name'] ?? null,
                'latitude' => $item['latitude'] ?? null,
                'longitude' => $item['longitude'] ?? null,
            ]);
        }
    }
}
