<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shorcut icon" href="/assets/icon/favicon.ico">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">

    <title>Menheal | {{ $title }}</title>
</head>

<body style="overflow-x:hidden" class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-5 me-1">
                <img src="assets/img/Icon.png" alt="Mengheal">
            </a>
            <h3> <a href="{{ url('') }}" class="company-name"> Mengheal</a> </h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 ms-4 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Home' ? 'active fw-bold text-primary' : '' }} "
                            aria-current="page" href="{{ url('') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Antrian' ? 'active fw-bold text-primary' : '' }} "
                            href="{{ url('/konsultasi-langsung') }}">Konsultasi Langsung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Konsultasi Online' ? 'active fw-bold text-primary' : '' }} "
                            href="{{ url('/konsultasionline') }}">Konsultasi Online</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Healing
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('quote') }}">Quotes</a></li>
                            <li><a class="dropdown-item" href="{{ url('video-booster') }}">Video Booster</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav me-5 mb-2 ms-4 mb-lg-0">
                    @auth
                        <div class="hstack gap-3">
                            <li class="nav-item">
                                <img src="assets/img/user.png" style="width: 40px; height: 40px" alt="user" class="border border-dark rounded-circle">
                            </li>
                            <div class="vr"></div>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <form action="{{ url('logout') }}" method="POST">
                                            @csrf
                                            <div class="dropdown-item d-flex flex-row">
                                                <ion-icon size="large" name="log-out-outline"></ion-icon>
                                                <button class="dropdown-item" type="submit">Logout</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </div>
                    @else
                        <div class="hstack gap-3">
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                            <div class="vr"></div>
                            <li class="nav-item">
                                <a class="nav-link" href="/register">Daftar</a>
                            </li>
                        </div>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        @yield('container')
    </div>
    <footer class="bg-light text-center text-white mt-auto">
        <!-- Grid container -->
        <div class="container p-4 pb-0 ">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a href="#" class="btn">
                    <ion-icon size="large" name="logo-facebook"></ion-icon>
                </a>

                <!-- Twitter -->
                <a href="#" class="btn">
                    <ion-icon size="large" name="logo-twitter"></ion-icon>
                </a>

                <!-- Google -->
                <a href="#" class="btn">
                    <ion-icon size="large" name="logo-google"></ion-icon>
                </a>

                <!-- Instagram -->
                <a href="#" class="btn">
                    <ion-icon size="large" name="logo-instagram"></ion-icon>
                </a>

                <!-- Linkedin -->
                <a href="#" class="btn">
                    <ion-icon size="large" name="logo-linkedin"></ion-icon>
                </a>

                <!-- Github -->
                <a href="#" class="btn">
                    <ion-icon size="large" name="logo-github"></ion-icon>
                </a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3">
            <p style="font-weight: bold; color: black">© 2022 Copyright:</p>
            <h3> <a href="{{ url('') }}" class="company-name"> Mengheal</a></h3>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- ionicon -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
