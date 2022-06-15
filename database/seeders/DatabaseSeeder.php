<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
//            B megoldás
//            UserSeeder::class,
//            TodoSeeder::class,
            UserTodoSeeder::class
        ]);
    }
}
