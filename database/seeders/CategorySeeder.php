<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'color' => '#FF2D20',
        ]);

        Category::create([
            'name' => 'PHP',
            'slug' => 'php',
            'color' => '#777777',
        ]);

        Category::create([
            'name' => 'JavaScript',
            'slug' => 'javascript',
            'color' => '#F0DB4F',
        ]);

        Category::create([
            'name' => 'Vue',
            'slug' => 'vue',
            'color' => '#42b883',
        ]);

        Category::create([
            'name' => 'React',
            'slug' => 'react',
            'color' => '#61dafb',
        ]);
    }
}
