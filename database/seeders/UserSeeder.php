<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Assurez-vous que le chemin vers le modèle User est correct

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Buna',
            'email' => 'jeremytroccaz@gmail.com',
            'password' => Hash::make('password'),
            // Ajoutez d'autres champs si nécessaire
        ]);
    }
}
