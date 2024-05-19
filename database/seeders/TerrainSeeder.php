<?php

namespace Database\Seeders;

use App\Models\Terrain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TerrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Factory
        $terrain = Terrain::factory()->create();

        // Seeder
        DB::table('terrains')->insert([
            'longueur' => rand(1, 100) + (float) rand() / (float) getrandmax(),
            'largeur' => rand(1, 100) + (float) rand() / (float) getrandmax(),
            'type_papier' => $this->generateRandomTypePapier(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Generate a random type_papier value.
     *
     * @return string
     */
    private function generateRandomTypePapier()
    {
        $types = ['Bail', 'Titre foncier'];
        return $types[array_rand($types)];
    }
}
