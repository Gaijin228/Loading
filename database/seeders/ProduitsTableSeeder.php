<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'male'),
            'prix_ht' => 25,
            'description' => fake()->sentence(3, true),
            'photo_principale' => '34'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'male'),
            'prix_ht' => 39,
            'description' => fake()->sentence(3, true),
            'photo_principale' => '30'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'female'),
            'prix_ht' => 15,
            'description' => fake()->sentence(3, true),
            'photo_principale' => '26'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'female'),
            'prix_ht' => 29,
            'description' => fake()->sentence(3, true),
            'photo_principale' => '6'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'female'),
            'prix_ht' => 35,
            'description' => fake()->sentence(3, true),
            'photo_principale' => '7'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'female'),
            'prix_ht' => 45,
            'description' => fake()->sentence(3, true),
            'photo_principale' => '10'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'male'),
            'prix_ht' => 25,
            'description' => fake()->sentence(3, true),
            'photo_principale' => '27'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'male'),
            'prix_ht' => 85,
            'description' => fake()->sentence(3, true),
            'photo_principale' => 't-shirt-eclair-bleu-printemps-de-bourges'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'female'),
            'prix_ht' => 65,
            'description' => fake()->sentence(3, true),
            'photo_principale' => '35'.'.jpg',
        ]);
    }
}
