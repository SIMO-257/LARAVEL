<?php

namespace Database\Factories;

use App\Models\Filiere;
use App\Models\Stagiaire;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Stagiaire>
 */
class StagiaireFactory extends Factory
{
    protected $model = Stagiaire::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name(),
            'age' => fake()->numberBetween(18, 35),
            'email' => fake()->unique()->safeEmail(),
            'filiere_id' => Filiere::query()->inRandomOrder()->value('id')
                ?? Filiere::query()->create(['nom_filiere' => fake()->unique()->word()])->id,
        ];
    }
}
