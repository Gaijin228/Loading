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
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nostrum ducimus voluptate officiis placeat autem iusto quia laudantium temporibus eligendi.',
            'photo_principale' => '34'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'male'),
            'prix_ht' => 39,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum rem ullam enim mollitia cumque? Aliquam quia tempora inventore excepturi delectus.',
            'photo_principale' => '30'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'female'),
            'prix_ht' => 15,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nemo harum saepe sint placeat. Perspiciatis, nulla. Dolorum nam velit quasi?',
            'photo_principale' => '26'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'female'),
            'prix_ht' => 29,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit earum distinctio aliquid quibusdam ducimus at pariatur numquam, eaque dolorem in.',
            'photo_principale' => '6'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'female'),
            'prix_ht' => 35,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat illum quae possimus quaerat voluptatem, dolore aspernatur iste odio velit enim.',
            'photo_principale' => '7'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'female'),
            'prix_ht' => 45,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam id porro soluta doloremque dignissimos dolores sequi laudantium sapiente minus nemo.',
            'photo_principale' => '10'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'male'),
            'prix_ht' => 25,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita ipsa recusandae ex eos consequatur quo fugiat optio eaque explicabo. Pariatur!',
            'photo_principale' => '27'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'male'),
            'prix_ht' => 85,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quisquam eos veritatis modi deserunt. Facere, necessitatibus recusandae? Ad, itaque facilis.',
            'photo_principale' => 't-shirt-eclair-bleu-printemps-de-bourges'.'.jpg',
        ]);
        DB::table('produits')->insert([
            'nom' => fake()->name($gender = 'female'),
            'prix_ht' => 65,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, eligendi! Libero veniam, debitis cumque optio quasi necessitatibus illo accusantium dicta?',
            'photo_principale' => '35'.'.jpg',
        ]);
    }
}
