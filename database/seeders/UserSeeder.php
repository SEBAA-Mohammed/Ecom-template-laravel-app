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

        foreach (range(1, 10) as $index) {
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

        DB::table('users')->insert([
            'nom' => 'user',
            'prenom' => 'user',
            'adresse' => 'fez',
            'ville' => 'fez',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user1234'),
            'tel' => '0606060606',
        ]);
    }
}
