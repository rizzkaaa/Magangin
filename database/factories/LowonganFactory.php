<?php

namespace Database\Factories;

use App\Models\Lowongan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lowongan>
 */
class LowonganFactory extends Factory
{
        protected $model = Lowongan::class;

    public function definition(): array
    {
        return [
            'banner' => fake()->image(),
            'judul' => fake()->sentence(15),
            'deskripsi' => fake()->paragraph(),
            'posisi' => fake()->sentence(),
            'kuota' => fake()->randomDigitNotNull(),
            'lokasi' => fake()->sentence(15),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'rentang_usia' => fake()->randomDigitNotNull(),
            'mulai_magang' => fake()->date('Y_m_d'),
            'selesai_magang' => fake()->date('Y_m_d'),
            'deadline_apply' => fake()->date('Y_m_d'),
            'uang_saku' => fake()->word()
        ];
    }
}
