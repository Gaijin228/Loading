<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag = new Tag();
        $tag->nom = "#Humour";
        $tag->save();

        $tag = new Tag();
        $tag->nom = "#Fun";
        $tag->save();

        $tag = new Tag();
        $tag->nom = "#Rouge";
        $tag->save();
    }
}
