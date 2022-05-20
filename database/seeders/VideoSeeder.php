<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('videos')->insert([
            [
                 'judul_vid' => 'Apa itu Kesehatan Mental? (Belajar Psikologi)',
                 'url' => 'https://www.youtube.com/embed/xDUy5dmhHcM',                
            ]
        ]);
    }
}
