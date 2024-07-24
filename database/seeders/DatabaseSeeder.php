<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Movie;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Comedy',
            'Drama',
            'Romance',
            'Animation',
            'Action'
        ];

        foreach ($categories as $categoryName) {
            $category = Category::create(['name' => $categoryName]);

            Movie::create([
                'title' => 'Example Movie ' . $categoryName,
                'year' => rand(2000, 2023),
                'studio' => 'Example Studio',
                'category_id' => $category->id
            ]);
        }
    }
}
