@extends('layout.main')

@section('container')

<div class="wrapper">
    <section class="hero-container">
        <div>
            <div>
                <h1>Make better coffe</h1>
                <p>why learn how to blog?</p>
            </div>
        </div>
        <img src="../assets/img/landing.jpg" width="600 px" height="300 px">
    </section>
    <section id="home">
        <img src="../assets/img/landing2.jpg" width="600px" height="300px">
        <div class="kolom">
            <p class="deskripsi-1">Kami menyediakan</p>
            <h2>Curhat Online</h2>
            <p>Halo, web ini dibuat untuk memenuhi tugas projek tim program Digital Talent Scholarship Progate.
                Web ini ditujukan untuk memberikan informasi mengenai kursus, seminar dan workshop yang diselenggarakan 
                oleh beberapa universitas.
            </p>
        </div>
    </section>
    <section id="courses">
        <div class="kolom">
            <p class="deskripsi">Kami menyediakan</p>
            <h2>Curhat Online</h2>
            <p>Halo, web ini dibuat untuk memenuhi tugas projek tim program Digital Talent Scholarship Progate.
                Web ini ditujukan untuk memberikan informasi mengenai kursus, seminar dan workshop yang diselenggarakan 
                oleh beberapa universitas.
            </p>
        </div>
        <img src="../assets/img/landing3.jpg" width="600px" height="300px">
    </section>
    <section class="description-container">
        <div>
            <div>
                <h2> long established</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that.</p>
            </div>
            <div class="description-left-footer">
                <p>May 20th 2020</p>
            </div>
        </div>
        <img src="../assets/img/landing4.jpg" alt="desc">
    </section>
    <section class="what-is-container">
        <div>
            <div>
                <h1>What is Lorem Ipsum?</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution...</p>
            </div>
            <div class="footer">
                <p>May 20</p>
                <p class="font-weight-bold">Read more</p>
            </div>
        </div>
        <img src="../assets/img/landing5.jpg" alt="what-is">
    </section>

</div>




@endsection