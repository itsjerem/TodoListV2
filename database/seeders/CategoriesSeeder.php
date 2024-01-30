<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // Assurez-vous que le chemin vers le modèle Category est correct

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Travail', 'color' => '#1F2937'], // Cool Gray 800
            ['name' => 'Personnel', 'color' => '#10B981'], // Green 500
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
