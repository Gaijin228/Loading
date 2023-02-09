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

        // $category7 = new Category();
        // $category7->nom ="Les goonies";
        // $category7->is_online = 1;
        // $category7->parent_id = 1;
        // $category7->save();

        // $category8 = new Category();
        // $category8->nom ="Star wars";
        // $category8->is_online = 1;
        // $category8->parent_id = 1;
        // $category8->save();

        // $category9 = new Category();
        // $category9->nom ="Star Trek";
        // $category9->is_online = 1;
        // $category9->parent_id = 1;
        // $category9->save();

        // $category10 = new Category();
        // $category10->nom ="Super Man";
        // $category10->is_online = 1;
        // $category10->parent_id = 1;
        // $category10->save();
    }
}
