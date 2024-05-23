<?php

namespace Database\Seeders;

use App\Models\SousFamille;
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

        $eCommerceTypes = [
            "Clothing and Fashion",
            "Electronics and Gadgets",
            "Books and Literature",
            "Home and Furniture",
            "Health and Beauty",
            "Sports and Outdoor Equipment",
            "Toys and Games",
            "Automotive Parts and Accessories",
            "Food and Grocery",
            "Jewelry and Accessories",
            "Pet Supplies",
            "Arts and Crafts",
            "Baby and Kids Products",
            "Office Supplies",
            "Travel and Luggage",
            "Musical Instruments",
            "Gardening and Outdoor Decor",
            "Collectibles and Memorabilia",
            "Digital Products and Services",
            "Handmade and Artisanal Goods"
        ];

        $faker = Faker::create();

        foreach ($eCommerceTypes as $type) {
            SousFamille::create([
                'libelle' => $type,
                'image' => $faker->imageUrl(),
                'famille_id' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}
