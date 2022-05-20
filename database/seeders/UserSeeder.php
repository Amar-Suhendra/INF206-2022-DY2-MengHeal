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
                'level_access' => true,
            ],
            [
                'name' => 'rudy',
                'username' => 'rudy',
                'email' => 'rudy@gmail.com',
                'password' => bcrypt('123'),
                'level_access' => false,
            ],
            [
                'name' => 'ainal',
                'username' => 'ainal',
                'email' => 'ainal@gmail.com',
                'password' => bcrypt('123'),
                'level_access' => false,
            ],
            [
                'name' => 'akbar',
                'username' => 'akbar',
                'email' => 'akbar@gmail.com',
                'password' => bcrypt('123'),
                'level_access' => false,
            ],
            [
                'name' => 'yoan',
                'username' => 'yoan',
                'email' => 'yoan@gmail.com',
                'password' => bcrypt('123'),
                'level_access' => false,
            ]
        ]);
    }
}
