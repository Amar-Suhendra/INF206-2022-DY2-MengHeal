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
            ],
            [
                'judul_vid' => '#WeCanWeWill | Mental Health Awareness Campaign',
                'url' => 'https://www.youtube.com/embed/AcV10oWZMzU',                
            ],
            [
                'judul_vid' => 'Break the Stigma',
                'url' => 'https://www.youtube.com/embed/49mfPFTZsHs',                
            ],
            [
                'judul_vid' => 'You Are Not Alone | Overcome Depression, Anxiety and Mental Health Problem Motivational Video',
                'url' => 'https://www.youtube.com/embed/Vw1_AEaoXtM',                
            ],
            [
                'judul_vid' => 'Teen Health: Mental Health',
                'url' => 'https://www.youtube.com/watch?v=1i9OktVsTWo',                
            ],
            [
                'judul_vid' => 'How to spot the signs of mental illness',
                'url' => 'https://www.youtube.com/watch?v=FB49AezFJxs',                
            ]
        ]);
    }
}
