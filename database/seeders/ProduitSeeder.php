<?php

namespace Database\Seeders;

use App\Models\Produit;
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

        $products = [
            [
                "title" => "Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops",
                "price" => 109.95,
                "description" => "Your perfect pack for everyday use and walks in the forest. Stash your laptop (up to 15 inches) in the padded sleeve, your everyday",
                "image" =>
                "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",

            ],
            [
                "title" => "Mens Casual Premium Slim Fit T-Shirts",
                "price" => 22.3,
                "description" => "Slim-fitting style, contrast raglan long sleeve, three-button henley placket, light weight & soft fabric for breathable and comfortable wearing. And Solid stitched shirts with round neck made for durability and a great fit for casual fashion wear and diehard baseball fans. The Henley style round neckline includes a three-button placket.",
                "image" =>            "https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg",

            ],
            [
                "title" => "Mens Cotton Jacket",
                "price" => 55.99,
                "description" => "great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or your family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.",
                "image" =>            "https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg",

            ],
            [
                "title" => "Mens Casual Slim Fit",
                "price" => 15.99,
                "description" => "The color could be slightly different between on the screen and in practice. / Please note that body builds vary by person, therefore, detailed size information should be reviewed below on the product description.",
                "image" =>            "https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg",

            ],
            [
                "title" => "John Hardy Women's Legends Naga Gold & Silver Dragon Station Chain Bracelet",
                "price" => 695,
                "description" => "From our Legends Collection, the Naga was inspired by the mythical water dragon that protects the ocean's pearl. Wear facing inward to be bestowed with love and abundance, or outward for protection.",
                "image" =>            "https://fakestoreapi.com/img/51Y5NI-I5jL._AC_UX679_.jpg",

            ],
            [
                "title" => "Solid Gold Petite Micropave",
                "price" => 168,
                "description" => "Satisfaction Guaranteed. Return or exchange any order within 30 days.Designed and sold by Hafeez Center in the United States. Satisfaction Guaranteed. Return or exchange any order within 30 days.",
                "image" =>            "https://fakestoreapi.com/img/81XH0e8fefL._AC_UY879_.jpg",

            ],
            [
                "title" => "White Gold Plated Princess",
                "price" => 9.99,
                "description" => "Classic Created Wedding Engagement Solitaire Diamond Promise Ring for Her. Gifts to spoil your love more for Engagement, Wedding, Anniversary, Valentine's Day...",
                "image" =>            "https://fakestoreapi.com/img/71HblAHs5xL._AC_UY879_-2.jpg",

            ],
            [
                "title" => "Pierced Owl Rose Gold Plated Stainless Steel Double",
                "price" => 10.99,
                "description" => "Rose Gold Plated Double Flared Tunnel Plug Earrings. Made of 316L Stainless Steel",
                "image" =>            "https://fakestoreapi.com/img/71z3kpMAYsL._AC_UY879_.jpg",

            ],
            [
                "title" => "BIYLACLESEN Women's 3-in-1 Snowboard Jacket Winter Coats",
                "price" => 56.99,
                "description" => "Note:The Jackets is US standard size, Please choose size as your usual wear Material: 100% Polyester; Detachable Liner Fabric: Warm Fleece. Detachable Functional Liner: Skin Friendly, Lightweigt and Warm.Stand Collar Liner jacket, keep you warm in cold weather. Zippered Pockets: 2 Zippered Hand Pockets, 2 Zippered Pockets on Chest (enough to keep cards or keys)and 1 Hidden Pocket Inside.Zippered Hand Pockets and Hidden Pocket keep your things secure. Humanized Design: Adjustable and Detachable Hood and Adjustable cuff to prevent the wind and water,for a comfortable fit. 3 in 1 Detachable Design provide more convenience, you can separate the coat and inner as needed, or wear it together. It is suitable for different season and help you adapt to different climates",
                "image" =>            "https://fakestoreapi.com/img/51eg55uWmdL._AC_UX679_.jpg",

            ],
            [
                "title" => "Lock and Love Women's Removable Hooded Faux Leather Moto Biker Jacket",
                "price" => 29.95,
                "description" => "100% POLYURETHANE(shell) 100% POLYESTER(lining) 75% POLYESTER 25% COTTON (SWEATER), Faux leather material for style and comfort / 2 pockets of front, 2-For-One Hooded denim style faux leather jacket, Button detail on waist / Detail stitching at sides, HAND WASH ONLY / DO NOT BLEACH / LINE DRY / DO NOT IRON",

                "image"
                => "https://fakestoreapi.com/img/61pHAEJ4NML._AC_UX679_.jpg",
            ],

        ];

        foreach ($products as $productData) {
            $product = new Produit([
                'codebarre' => $faker->numberBetween(10000, 99999),
                'designation' => $productData['title'],
                'prix_ht' => $productData['price'],
                'tva' => $faker->randomFloat(2, 0.2, 0.5),
                'description' => $productData['description'],
                'image' => $productData['image'],
                'sous_famille_id' => $faker->randomElement([1, 2, 3, 4, 5]),
                'marque_id' => $faker->randomElement([1, 2, 3]),
                'unite_id' => $faker->randomElement([1, 2, 3]),
            ]);

            $product->save();
        }
    }
}
