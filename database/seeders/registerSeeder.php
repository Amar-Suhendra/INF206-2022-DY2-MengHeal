<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class registerSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('registers')->insert([
      [
        'name' => 'amar',
        'Username' => 'amar',
        'Email' => 'amar@gmail.com',
        'Password' => bcrypt('123'),
      ],
      [
        'name' => 'yoan',
        'username' => 'yoan',
        'Email' => 'yoan@gmail.com',
        'Password' => bcrypt('123'),
      ],
      [
        'name' => 'umam',
        'username' => 'umam',
        'Email' => 'umam@gmail.com',
        'Password' => bcrypt('123'),
      ],
      [
        'name' => 'nabil',
        'username' => 'nabil',
        'Email' => 'nabil@gmail.com',
        'Password' => bcrypt('123'),
      ],
      [
        'name' => 'haris daffa',
        'username' => 'haris daffa',
        'Email' => 'haris@gmail.com',
        'Password' => bcrypt('123'),
      ]
    ]);
  }
}
