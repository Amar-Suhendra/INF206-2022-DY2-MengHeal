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
            UserSeeder::class
        ]);
        $this->call([
            registerSeeder::class
        ]);
        $this->call([
            QuotesSeeder::class
        ]);
        $this->call([
            VideoSeeder::class
        ]);
    }
}
