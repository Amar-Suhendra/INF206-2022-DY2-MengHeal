<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'ikhsan',
                'username' => 'ikhsan',
                'email' => 'ikhsan@gmail.com',
                'password' => bcrypt('123'),
                'level_access' => 2,
            ],
            [
                'name' => 'rudy',
                'username' => 'rudy',
                'email' => 'rudy@gmail.com',
                'password' => bcrypt('123'),
                'level_access' => 1,
            ],
            [
                'name' => 'ainal',
                'username' => 'ainal',
                'email' => 'ainal@gmail.com',
                'password' => bcrypt('123'),
                'level_access' => null,
            ],
            [
                'name' => 'akbar',
                'username' => 'akbar',
                'email' => 'akbar@gmail.com',
                'password' => bcrypt('123'),
                'level_access' => 0,
            ]
        ]);
    }
}
