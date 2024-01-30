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
            ['name' => 'Travail', 'color' => '#3B82F6'],
            ['name' => 'Personnel', 'color' => '#10B981'],
            ['name' => 'Famille', 'color' => '#b5a0ee'], // Purple 300
            ['name' => 'Loisirs', 'color' => '#F59E0B'], // Yellow 400
            ['name' => 'Urgent', 'color' => '#EF4444'], // Red 500
            ['name' => 'Autre', 'color' => '#1F2937'], // Y
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
