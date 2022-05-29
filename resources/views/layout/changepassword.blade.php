<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shorcut icon" href="/assets/icon/icon.ico">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">

    <title>Menheal | Change Password</title>
</head>

<body style="overflow-x:hidden" class="d-flex flex-column min-vh-100 bg-light">
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <div class="container-fluid">
            <a class="navbar-brand ms-5 me-1">
                <img src="assets/img/Icon.png" alt="Mengheal">
            </a>
            <h3> <a href="{{ url('') }}" class="company-name"> Mengheal</a> </h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <ion-icon name="menu-outline" size="large"></ion-icon>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 ms-4 mb-lg-0">
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item dropdown">
                    </li>
                </ul>
                <ul class="navbar-nav mb-lg-0 me-5">
                    @auth
                        <div class="hstack gap-3">
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
                            <div class="vr"></div>
                            <li class="nav-item">
                                <img src="assets/img/user.png" style="width: 40px; height: 40px" alt="user"
                                    class="border border-dark rounded-circle">
                            </li>
                        </div>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        <h3>Change Password</h3>

        <form action="{{ url('/change-password') }}" method="post">
            @csrf
            <div class="row g-3 justify-content-start ">
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="col-auto">
                            <label for="password" class="col-form-label me-5">Password</label>
                        </div>
                        <div class="col-auto me-2 ms-4">
                            <input type="password" id="password" name="password"
                                class="form-control border border-secondary text-dark"
                                aria-describedby="passwordHelpInline" autofocus onkeyup='check(); confirm();'>
                        </div>
                        <div class="col-auto">
                            <span id="passwordHelpInline" class="form-text">
                                Must be 8-20 characters long.
                            </span>
                        </div>

                    </div>
                    <div class="input-group mb-3 justify-content-start" style="margin-left:9rem; ">
                        <div class="">
                            <span id='message-check'></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-auto me-3">
                            <label for="confirm_password" class="col-form-label">Re-type Password</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="confirm_password" name="confirm_password"
                                class="form-control border border-secondary text-dark" onkeyup='confirm();'>
                        </div>
                        <div class="col-auto">
                            {{-- <span id="passwordHelpInline" class="form-text">
                                Must be 8-20 characters long.
                            </span> --}}
                            <span id='message'></span>
                        </div>
                    </div>
                    <div class="input-group d-flex justify-content-center">
                        <div class=" ">
                            <button type="submit" id="submit" class="btn btn-info" disabled>Change</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <footer class="bg-white text-center text-white mt-auto">
        <!-- Grid container -->
        <div class="container p-4 pb-0 ">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a href="https://github.com/Amar-Suhendra/INF206-2022-DY2-MengHeal/graphs/contributors" target="_blank"
                    class="btn">
                    <ion-icon size="large" name="logo-facebook"></ion-icon>
                </a>

                <!-- Twitter -->
                <a href="https://github.com/Amar-Suhendra/INF206-2022-DY2-MengHeal/graphs/contributors" target="_blank"
                    class="btn">
                    <ion-icon size="large" name="logo-twitter"></ion-icon>
                </a>

                <!-- Google -->
                <a href="https://github.com/Amar-Suhendra/INF206-2022-DY2-MengHeal/graphs/contributors" target="_blank"
                    class="btn">
                    <ion-icon size="large" name="logo-google"></ion-icon>
                </a>

                <!-- Instagram -->
                <a href="https://github.com/Amar-Suhendra/INF206-2022-DY2-MengHeal/graphs/contributors" target="_blank"
                    class="btn">
                    <ion-icon size="large" name="logo-instagram"></ion-icon>
                </a>

                <!-- Linkedin -->
                <a href="https://github.com/Amar-Suhendra/INF206-2022-DY2-MengHeal/graphs/contributors" target="_blank"
                    class="btn">
                    <ion-icon size="large" name="logo-linkedin"></ion-icon>
                </a>

                <!-- Github -->
                <a href="https://github.com/Amar-Suhendra/INF206-2022-DY2-MengHeal/graphs/contributors" target="_blank"
                    class="btn">
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
    <script>
        let check = function() {
            let pass = document.getElementById('password').value;
            // console.log(pass.length == 2);
            if (pass.length >= 12) {
                document.getElementById('message-check').style.color = 'green';
                document.getElementById('message-check').innerHTML = 'Strong!';
                document.getElementById('message-check').style.marginLeft = '7px';
                document.getElementById('submit').disabled = false;
            } else if (pass.length >= 8) {
                document.getElementById('message-check').style.color = 'orange';
                document.getElementById('message-check').innerHTML = 'OK!';
                document.getElementById('message-check').style.marginLeft = '7px';
                document.getElementById('submit').disabled = false;
            } else {
                document.getElementById('message-check').style.color = 'red';
                document.getElementById('message-check').style.marginLeft = '7px';
                document.getElementById('message-check').innerHTML = 'you have to enter at least 8 digit!';
                document.getElementById('submit').disabled = true;
            }
        }
        let confirm = function() {
            // console.log(document.getElementById('password').value);
            if (document.getElementById('password').value ===
                document.getElementById('confirm_password').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'matching';
                document.getElementById('message').style.marginLeft = '7px';
                document.getElementById('submit').disabled = false;
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').style.marginLeft = '7px';
                document.getElementById('message').innerHTML = 'not matching';
                document.getElementById('submit').disabled = true;
            }
        }
    </script>
</body>

</html>
