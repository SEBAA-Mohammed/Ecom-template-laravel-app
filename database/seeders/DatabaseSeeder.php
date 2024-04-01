<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MarqueSeeder::class,
            UniteSeeder::class,
            FamilleSeeder::class,
            SousFamilleSeeder::class,
            EtatSeeder::class,
            ProduitSeeder::class,
            ModeReglementSeeder::class,
            UserSeeder::class,
            CommandeSeeder::class,
            DetailCommandeSeeder::class,
        ]);
    }
}
