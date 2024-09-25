<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mhs>
 */
class MhsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nrp' => $this->faker->unique()->numerify('##########'),
            'nama' => $this->faker->name,
            'alamat' => $this->faker->address,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
