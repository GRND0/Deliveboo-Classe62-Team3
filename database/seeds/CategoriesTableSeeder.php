<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Italiano',
            'Thailandese',
            'Pizza',
            'Messicano',
            'Giapponese',
            'Steakhouse',
            'Vegetariano',
            'Indiano',
            'Greco',
            'Pesce',
            'Mediterraneo',
            'Internazionale'
        ];

        foreach ($categories as $category) {
            $new_category = new Category();
            $new_category->name = $category;
            $new_category->slug = Str::slug($category, '-');
            $new_category->save();            
        }
    }
}

