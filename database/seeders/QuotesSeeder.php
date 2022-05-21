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
                'quotes' => 'Ada harapan, bahkan ketika otakmu mengatakan tidak ada.',
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
            ],
            [
                'quotes' => 'Lepaskan ceritamu. Biarkan diri Anda hadir dengan siapa Anda saat ini.',
                'author' => 'Russ Kyle',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Hari-hari gelap saya membuat saya kuat. Atau mungkin saya sudah kuat, dan mereka membuat saya membuktikannya.',
                'author' => 'Tuan Emery',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Anda tidak bisa mengontrol semuanya. Terkadang Anda hanya perlu bersantai dan percaya bahwa segala sesuatunya akan berhasil. Lepaskan sedikit dan biarkan hidup terjadi.',
                'author' => 'Kody Keplinger',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Penyakit Anda bukanlah identitas Anda. Chemistry Anda bukanlah karakter Anda.',
                'author' => 'Rick Warren',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Kebahagiaan dapat ditemukan bahkan di saat-saat tergelap, jika seseorang hanya ingat untuk menyalakan lampu.',
                'author' => 'Albus Dumbledore',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Rasa sakit emosional bukanlah sesuatu yang harus disembunyikan dan tidak pernah dibicarakan. Ada kebenaran dalam rasa sakit Anda, ada pertumbuhan dalam rasa sakit Anda, tetapi hanya jika itu pertama kali diungkapkan.',
                'author' => 'Steven Aitchison',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Saya tidak takut badai karena saya sedang belajar bagaimana mengarungi kapal saya.',
                'author' => 'Amy March',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Saya menemukan bahwa dengan depresi, salah satu hal terpenting yang dapat Anda sadari adalah bahwa Anda tidak sendirian. Anda bukan yang pertama melewatinya, Anda tidak akan menjadi yang terakhir melewatinya.',
                'author' => 'Dwayne “The Rock” Johnson',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Pengalaman yang saya miliki adalah begitu Anda mulai berbicara tentang [mengalami perjuangan kesehatan mental], Anda menyadari bahwa sebenarnya Anda adalah bagian dari klub yang cukup besar.',
                'author' => 'Prince Harry',
                'created_at' => now(),
            ],
            [
                'quotes' => 'Di tengah musim dingin, saya akhirnya menemukan bahwa ada musim panas yang tak terkalahkan dalam diri saya.',
                'author' => 'Albert Camus',
                'created_at' => now(),
            ]
        ]);
    }
}
