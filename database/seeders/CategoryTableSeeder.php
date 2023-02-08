<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $category = new Category();
        $category->nom ="Films";
        $category->is_online = 1;
        $category->save();

        $category2 = new Category();
        $category2->nom ="Séries TV";
        $category2->is_online = 1;
        $category2->save();

        $category3 = new Category();
        $category3->nom ="Musique";
        $category3->is_online = 1;
        $category3->save();

        $category4 = new Category();
        $category4->nom ="Jeux-vidéos";
        $category4->is_online = 1;
        $category4->save();

        $category5 = new Category();
        $category5->nom ="Sport";
        $category5->is_online = 1;
        $category5->save();

        $category6 = new Category();
        $category6->nom ="Dessins animés";
        $category6->is_online = 1;
        $category6->save();
    }
}
