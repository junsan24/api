<?php

namespace Database\Factories;

use App\Models\Petition;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Petition>
 */
class PetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'categories' => fake()->text(),
            'description' => fake()->paragraph(150),
            'author' => fake()->name(),
            'signees' => fake()->numberBetween(1,1000)
        ];
    }
}
