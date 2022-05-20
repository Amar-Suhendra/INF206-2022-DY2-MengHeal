<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quotes')->insert([
            [
                'quotes' =>'The best preparation for tomorrow is doing your best today.',
                'author' => 'H. Jackson Brown Jr.',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Health is a state of complete physical, mental, and social well-being and not merely the absence of disease or infirmity.',
                'author' => 'World Health Oragnization.',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Your self-worth is determined by you. You don’t have to depend on someone telling you who you are.',
                'author' => 'Beyoncé Knowles-Carter.',
                'created_at' => now(),
            ],
            [
                'quotes' => 'You don’t see the mental ilness: It’s not a mass, it’s not a cyst. But it’s there. Why do you need to prove it!',
                'author' => 'Amanda Seyfried.',
                'created_at' => now(),
            ],
            [
                'quotes' => 'I found that with depression, one of the most important things you could realize is that you’re not alone. You’re not the first to go through it; you’re not going to be the last to go through it.',
                'author' => 'The Rock.',
                'created_at' => now(),
            ],
            [
                'quotes' => 'I finally realized that owning up to your vulnerabilities is a form of strength. And making the choice to go to therapy is a form of strength.',
                'author' => 'Lizzo.',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Kamu tidak harus mengendalikan pikiranmu. Anda hanya harus berhenti membiarkan mereka mengendalikan Anda.',
                'author' => 'Dan Millman',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Luangkan waktumu untuk menyembuhkan, selama yang kamu mau. Tidak ada orang lain yang tahu apa yang telah Anda alami. Bagaimana mereka bisa tahu berapa lama waktu yang dibutuhkan untuk menyembuhkanmu?',
                'author' => 'Abertoli',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Satu retakan kecil bukan berarti kamu hancur, itu berarti kamu sedang diuji dan kamu tidak hancur.',
                'author' => 'Linda Poindexter',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Kadang-kadang Anda bangun dari tempat tidur di pagi hari dan Anda berpikir, saya tidak akan berhasil, tetapi Anda tertawa di dalam - mengingat semua saat Anda merasa seperti itu.',
                'author' => 'Charles Bukowski',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Ada harapan, bahkan ketika otakmu mengatakan tidak ada',
                'author' => 'John Green',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Dari penderitaan telah muncul jiwa-jiwa terkuat; karakter yang paling besar penuh dengan bekas luka.',
                'author' => 'Kahlil Gibran',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Perawatan diri adalah bagaimana Anda mengambil kembali kekuatan Anda.',
                'author' => 'Lalah Delia',
                'created_at' => now(),
            ]
        ]);
    }
}
