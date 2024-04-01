<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DetailCommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('detail_commandes')->insert([
                'commande_id' => $faker->numberBetween(1, 3), // Assuming 3 orders exist
                'produit_id' => $faker->numberBetween(1, 3), // Assuming 3 products exist
                'quantite' => $faker->randomFloat(2, 1, 100),
                'prix_ht' => $faker->randomFloat(2, 0, 100),
                'tva' => $faker->randomFloat(2, 0, 20),
            ]);
        }
    }
}
