<?php

namespace Database\Factories;

use App\Models\Dusun;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Dusun>
 */
class DusunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_dusun' => 'Dusun ' . fake()->randomElement([
                'Bontoa',
                'Panaikang',
                'Tamarunang',
                'Bontomanai',
                'Borongraukang',
                'Pallantikang',
                'Timbuseng',
                'Kampung Beru',
                'Bontoramba',
                'Parangbanoa',
            ]),
            'kepala_dusun' => fake()->name(),
            'jumlah_penduduk' => fake()->numberBetween(300, 3000),
            'luas_wilayah' => fake()->randomFloat(2, 1, 15) . ' km²',
        ];
    }
}
