<?php

namespace Database\Factories;

use App\Models\Petugas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Petugas>
 */
class PetugasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_petugas' => fake()->name(),
            'nip' => fake()->numerify('######'),
            'alamat' => fake()->address(),
            'no_hp' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
