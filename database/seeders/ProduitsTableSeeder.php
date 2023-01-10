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
            'nom' => Str::random(10),
            'prix_ht' => 25,
            'description' => Str::random(20),
            'photo_principale' => Str::random(10),
        ]);
        DB::table('produits')->insert([
            'nom' => Str::random(10),
            'prix_ht' => 39,
            'description' => Str::random(20),
            'photo_principale' => Str::random(10),
        ]);
        DB::table('produits')->insert([
            'nom' => Str::random(10),
            'prix_ht' => 15,
            'description' => Str::random(20),
            'photo_principale' => Str::random(10),
        ]);
        DB::table('produits')->insert([
            'nom' => Str::random(10),
            'prix_ht' => 29,
            'description' => Str::random(20),
            'photo_principale' => Str::random(10),
        ]);
        DB::table('produits')->insert([
            'nom' => Str::random(10),
            'prix_ht' => 35,
            'description' => Str::random(20),
            'photo_principale' => Str::random(10),
        ]);
        DB::table('produits')->insert([
            'nom' => Str::random(10),
            'prix_ht' => 45,
            'description' => Str::random(20),
            'photo_principale' => Str::random(10),
        ]);
        DB::table('produits')->insert([
            'nom' => Str::random(10),
            'prix_ht' => 25,
            'description' => Str::random(20),
            'photo_principale' => Str::random(10),
        ]);
        DB::table('produits')->insert([
            'nom' => Str::random(10),
            'prix_ht' => 85,
            'description' => Str::random(20),
            'photo_principale' => Str::random(10),
        ]);
        DB::table('produits')->insert([
            'nom' => Str::random(10),
            'prix_ht' => 65,
            'description' => Str::random(20),
            'photo_principale' => Str::random(10),
        ]);
    }
}
