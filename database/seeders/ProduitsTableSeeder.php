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
            'photo_principale' => 'goonies'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt Star Trek',
            'prix_ht' => 39,
            'description' => 'T-shirt du film les Star Trek',
            'photo_principale' => 'star_trek_kirk'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt M. Happy',
            'prix_ht' => 15,
            'description' => 'T-shirt qui rend heureux',
            'photo_principale' => 'happy'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt Hulk',
            'prix_ht' => 29,
            'description' => 'T-shirt qui rend super fort',
            'photo_principale' => 'hulk'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt Krusty Le Clown',
            'prix_ht' => 65,
            'description' => 'T-shirt qui rend super rigolo et cynique',
            'photo_principale' => 'krusty_simpsons'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt Little Miss Sunshine',
            'prix_ht' => 35,
            'description' => 'Une belle aventure familiale !',
            'photo_principale' => 'little_miss_sunshine'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt Les Simpsons',
            'prix_ht' => 45,
            'description' => 'T-shirt super cool',
            'photo_principale' => 'simpsons'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt SuperMan',
            'prix_ht' => 25,
            'description' => 'T-shirt Super man',
            'photo_principale' => 'super_man'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => 'T-shirt Wonder Woman',
            'prix_ht' => 85,
            'description' => 'T-shirt Wonder Woman',
            'photo_principale' => 'wonder_woman'.'.jpg',
        ]);
    }
}
