<?php

namespace Database\Seeders;

use CategoriesSeeder;
use Database\Seeders\CategoriesSeeder as SeedersCategoriesSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        // $this->call(CategoriesSeeder::class);
        $this->call(SeedersCategoriesSeeder::class);
        $this->call(TasksSeeder::class);
    }
}
