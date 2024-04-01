<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('commandes')->insert([
                'date' => $faker->date,
                'heure' => $faker->time,
                'regle' => $faker->boolean,
                'mode_reglement_id' => $faker->numberBetween(1, 3), // Assuming 3 payment modes exist
                'etat_id' => $faker->numberBetween(1, 3), // Assuming 3 states exist
                'user_id' => $faker->numberBetween(1, 3), // Assuming 3 users exist
            ]);
        }
    }
}
