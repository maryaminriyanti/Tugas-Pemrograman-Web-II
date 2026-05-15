<?php

namespace Database\Factories;

use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kecamatan>
 */
class KecamatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_kecamatan' => fake()->city(),
            'kode_kecamatan' => 'KEC' . fake()->unique()->numberBetween(100, 999),
            'alamat_kantor' => fake()->address(),
        ];
    }
}
