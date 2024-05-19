<?php

namespace Database\Factories;

use App\Models\Terrain;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Terrain>
 */
class TerrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    //protected $model = Terrain::class;

    public function definition(): array
    {
        return [
            'longueur' => $this->faker->randomFloat(3,1,100),
            'largeur' => $this->faker->randomFloat(3,1,100),
            'type_papier' => $this->faker->randomElement(['Bail', 'Titre foncier'])
        ];
    }
}
