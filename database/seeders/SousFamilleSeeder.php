<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SousFamilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('sous_familles')->insert([
                'libelle' => $faker->word,
                'image' => $faker->imageUrl(),
                'famille_id' => $faker->numberBetween(1, 5), // Assuming 3 families exist
            ]);
        }
    }
}
