<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('produits')->insert([
                'codebarre' => $faker->numberBetween(10000, 99999),
                'designation' => $faker->word,
                'prix_ht' => $faker->randomFloat(2, 0, 100),
                'tva' => $faker->randomFloat(2, 0, 20),
                'description' => $faker->sentence,
                'image' => $faker->imageUrl(),
                'sous_famille_id' => $faker->numberBetween(1, 3), // Assuming 3 sub-families exist
                'marque_id' => $faker->numberBetween(1, 3), // Assuming 3 brands exist
                'unite_id' => $faker->numberBetween(1, 3), // Assuming 3 units exist
            ]);
        }
    }
}
