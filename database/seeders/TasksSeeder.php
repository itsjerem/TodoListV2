<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Task::factory()->count(20)->create();
        $tasks = [
            [
                'name' => 'Faire les courses',
                'date'  => '2024-01-23',
                'category_id' => 3,
                'user_id' => 1,
            ],
            [
                'name' => 'Donner le dossier de projet',
                'date'  => '2024-02-12',
                'category_id' => 1,
                'user_id' => 2,
            ],
            [
                'name' => 'Rendre le livre à la bibliothèque',
                'date'  => '2024-03-21',
                'category_id' => 4,
                'user_id' => 3,
            ],
            [
                'name' => 'Acheter un cadeau pour l\'anniversaire de maman',
                'date'  => '2024-01-29',
                'category_id' => 3,
                'user_id' => 1,
            ],
            [
                'name' => 'Faire le ménage',
                'date'  => '2024-01-12',
                'category_id' => 3,
                'user_id' => 5,
            ],
            [
                'name' => 'Faire la vaisselle',
                'date'  => '2024-01-23',
                'category_id' => 3,
                'user_id' => 4,
            ],
            [
                'name' => 'Faire le repassage',
                'date'  => '2024-01-23',
                'category_id' => 3,
                'user_id' => 3,
            ],
            [
                'name' => 'Aller a la salle de sport',
                'date'  => '2024-02-03',
                'category_id' => 4,
                'user_id' => 2,
            ],
            [
                'name' => 'Faire le devoir de math',
                'date'  => '2024-01-23',
                'category_id' => 1,
                'user_id' => 1,
            ],
            [
                'name' => 'Faire le devoir de français',
                'date'  => '2024-01-23',
                'category_id' => 1,
                'user_id' => 2,
            ],
            [
                'name' => 'Faire le devoir de physique',
                'date'  => '2024-01-23',
                'category_id' => 1,
                'user_id' => 3,
            ],
            [
                'name' => 'Faire le devoir de chimie',
                'date'  => '2024-01-23',
                'category_id' => 1,
                'user_id' => 4,
            ],
            [
                'name' => 'Faire le devoir de svt',
                'date'  => '2024-01-23',
                'category_id' => 1,
                'user_id' => 5,
            ],
            [
                'name' => 'Faire le devoir de sport',
                'date'  => '2024-01-23',
                'category_id' => 1,
                'user_id' => 1,
            ],
            [
                'name' => 'Faire le devoir de musique',
                'date'  => '2024-01-23',
                'category_id' => 1,
                'user_id' => 2,
            ],
            [
                'name' => 'Faire le devoir de technologie',
                'date'  => '2024-01-23',
                'category_id' => 1,
                'user_id' => 3,
            ],
            [
                'name' => 'Faire le devoir d\'anglais',
                'date'  => '2024-01-23',
                'category_id' => 1,
                'user_id' => 4,
            ],
            [
                'name' => 'Faire le devoir d\'espagnol',
                'date'  => '2024-01-23',
                'category_id' => 1,
                'user_id' => 5,
            ],
            [
                'name' => 'Se faire couper les cheveux',
                'date'  => '2024-03-13',
                'category_id' => 2,
                'user_id' => 1,
            ],
            [
                'name' => 'Aller chez le dentiste',
                'date'  => '2024-02-23',
                'category_id' => 2,
                'user_id' => 2,
            ],
            [
                'name' => 'Aller chez le médecin',
                'date'  => '2024-01-23',
                'category_id' => 2,
                'user_id' => 3,
            ],
            [
                'name' => 'Aller chez le kiné',
                'date'  => '2024-01-23',
                'category_id' => 2,
                'user_id' => 4,
            ],
            [
                'name' => 'Aller chez le coiffeur',
                'date'  => '2024-01-23',
                'category_id' => 2,
                'user_id' => 5,
            ],
            [
                'name' => 'Aller chez le podologue',
                'date'  => '2024-01-23',
                'category_id' => 2,
                'user_id' => 1,
            ],
            [
                'name' => 'Aller chez le psychologue',
                'date'  => '2024-01-23',
                'category_id' => 2,
                'user_id' => 2,
            ],
            [
                'name' => 'Aller chez le psychiatre',
                'date'  => '2024-01-23',
                'category_id' => 2,
                'user_id' => 3,
            ],
            [
                'name' => 'Aller chez le cardiologue',
                'date'  => '2024-01-23',
                'category_id' => 2,
                'user_id' => 4,
            ],
            [
                'name' => 'Aller chez le dermatologue',
                'date'  => '2024-01-23',
                'category_id' => 2,
                'user_id' => 5,
            ],
            [
                'name' => 'Aller chez le gynécologue',
                'date'  => '2024-01-23',
                'category_id' => 2,
                'user_id' => 1,
            ],
            [
                'name' => 'Jouer a Tarkov',
                'date'  => '2024-01-21',
                'category_id' => 4,
                'user_id' => 2,
            ],
            [
                'name' => 'Aller faire du Tennis',
                'date'  => '2024-01-23',
                'category_id' => 4,
                'user_id' => 3,
            ],
            [
                'name' => 'Acheter une guitare',
                'date'  => '2024-01-23',
                'category_id' => 4,
                'user_id' => 4,
            ],
            [
                'name' => 'Aller au cinéma',
                'date'  => '2024-01-23',
                'category_id' => 4,
                'user_id' => 5,
            ],
            [
                'name' => 'Acheter du PQ',
                'date'  => '2024-01-23',
                'category_id' => 5,
                'user_id' => 1,
            ],
            [
                'name' => 'Acheter du PQ !!!',
                'date'  => '2024-01-23',
                'category_id' => 5,
                'user_id' => 2,
            ],
            [
                'name' => 'Aller récupérer le colis de Max',
                'date'  => '2024-01-23',
                'category_id' => 6,
                'user_id' => 3,
            ],
        ];
        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
