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
            'nom' => 'T-shirt Goonies',
            'prix_ht' => 25,
            'description' => 'T-shirt du film les Goonies',
            'category_id' => 1,
            'photo_principale' => 'goonies'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt Star Trek',
            'prix_ht' => 39,
            'description' => 'T-shirt du film les Star Trek',
            'category_id' => 2,
            'photo_principale' => 'star_trek_kirk'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt M. Happy',
            'prix_ht' => 15,
            'description' => 'T-shirt qui rend heureux',
            'category_id' => 6,
            'photo_principale' => 'happy'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt Hulk',
            'prix_ht' => 29,
            'description' => 'T-shirt qui rend super fort',
            'category_id' => 1,
            'photo_principale' => 'hulk'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt Krusty Le Clown',
            'prix_ht' => 65,
            'description' => 'T-shirt qui rend super rigolo et cynique',
            'category_id' => 6,
            'photo_principale' => 'krusty_simpsons'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt Little Miss Sunshine',
            'prix_ht' => 35,
            'description' => 'Une belle aventure familiale !',
            'category_id' => 1,
            'photo_principale' => 'little_miss_sunshine'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt Les Simpsons',
            'prix_ht' => 45,
            'description' => 'T-shirt super cool',
            'category_id' => 6,
            'photo_principale' => 'simpsons'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt SuperMan',
            'prix_ht' => 25,
            'description' => 'T-shirt Super man',
            'category_id' => 1,
            'photo_principale' => 'super_man'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt Wonder Woman',
            'prix_ht' => 85,
            'description' => 'T-shirt Wonder Woman',
            'category_id' => 1,
            'photo_principale' => 'wonder_woman'.'.jpg',
        ]);
    }
}
