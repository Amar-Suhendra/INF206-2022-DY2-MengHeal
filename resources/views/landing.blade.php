@extends('layout.main')

@section('container')
    <div class="wrapper">
        <section class="hero-container landing-section">
            <div class="row align-items-end ">
                <div class="col-4">
                    <h1 class="landing-h1">Be better person</h1>
                    <p class="konten-text">why learn how to good people?</p>
                </div>
                <div class="col-6 ms-auto">
                    <img src="../assets/img/landing.jpg" width="600 px" height="300 px">
                </div>
            </div>
        </section>
        <section class="landing-section" id="home">
            <img src="../assets/img/landing2.jpg" width="600px" height="300px">
            <div class="kolom">
                <p class="deskripsi-1">Kami menyediakan</p>
                <h2 class="landing-h2">Curhat Online</h2>
                <p class="konten-text">Halo sahabat, kalian dapat melakukan curhat dengan psikolog ahli yang kami miliki
                    tanpa takut informasi kalian disalahgunakan. Kalian dapat memilih fitur chat dan curhatlah
                    kapanpun yang kalian inginkan. Semangat ya!
                </p>
            </div>
        </section>
        <section class="landing-section" id="courses">
            <div class="kolom">
                <p class="deskripsi-1">Kami menyediakan</p>
                <h2 class="landing-h2">Quote Mantap Jiwa</h2>
                <p class="konten-text">Halo guys, kalian lesu hari ini? Ayoo baca kata-kata luar biasa dari ahli-ahli
                    kami.
                    Dijamin semangat hidup kalian bangkit lagi sampe rasanya ingin terbang. Kalian biasa
                    pilih fitur quote kami untuk melihat semua quote terbaik. Contoh nya dibawah ini nih!
                </p>
            </div>
            <img src="../assets/img/landing3.jpg" width="600px" height="300px">
        </section>
        <section class="landing-section quote-container">
            <div>
                <div>
                    <h2 class="landing-h2"> Quote of the day</h2>
                    <p class="konten-text">"Jangan terlalu cepat menilai orang dan langsung menjadikan sahabat.
                        Bagaikan gula dan garam, orang akan mengetahui bedanya setelah dirasa dan dicicipi.
                        Begitu juga manusia, anda akan dapat mengetahui siapa dia setelah mencoba bergaul dengannya.
                    </p>
                </div>
                <div class="description-quote">
                    <p class="konten-text">Rudy Hidayat S.Kom,Lc,MA</p>
                </div>
            </div>
            <img src="../assets/img/landing4.jpg" alt="desc">
        </section>
        <section class="landing-section" id="home">
            <img src="../assets/img/landing5.jpg" width="600px" height="300px">
            <div class="kolom">
                <p class="deskripsi-1">Kami menyediakan</p>
                <h2 class="landing-h2">Video Booster</h2>
                <p class="konten-text">Halo sahabat syurga, kalian ingin dapat motivasi tapi mager membaca? Web kami
                    menyediakan
                    fitur video booster lhoo. Kalian dapat nonton video-video terbaik yang akan meningkatkan
                    semangat hari senin kalian!
                </p>
            </div>
        </section>
        <section class="last-container landing-section">
            <div>
                <div>
                    <h1 class="landing-h1">Apa itu website MengHeal?</h1>
                    <p class="konten-text">MengHeal adalah website yang berfokus menyemangati hari-hari kalian.
                        Kami tidak mau mental kalian menjadi down hanya karena tugas, praktik, dan lain-lain.
                        Maka kami membuat website ini agar kalian dapat curhat, kalian dapat membaca ataupun
                        nonton video yang akan menyemangati kehidupan kalian!
                    </p>
                </div>
            </div>
            <img src="../assets/img/landing6.jpg" alt="last">
        </section>

    </div>
@endsection
