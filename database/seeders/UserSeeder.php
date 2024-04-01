<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 200) as $index) {
            DB::table('users')->insert([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'adresse' => $faker->address,
                'ville' => $faker->city,
                'email' => $faker->email,
                'password' => bcrypt('password'), // Change 'password' to the desired default password
                'tel' => $faker->phoneNumber,
            ]);
        }
    }
}
