<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>

<body class="login-body">
    <div class="login-box">
        <img src="assets/img/logo.png" class="login-avatar">
        <h1 class="login-h1">Login Here</h1>
        <form action="{{ url('login') }}" method="post">
            @csrf
            <p>Username</p>
            <input type="text" name="Username" placeholder="Enter Username">
            <p>Password</p>
            <input type="Password" name="Password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="a">Forget Password?</a>
            <a href="{{ url('register') }}">Register</a>
        </form>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('register'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Pendaftaran Berhasil!',
                showConfirmButton: false,
                timer: 1500,
            })
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal!',
                text: 'Username atau Password Salah!',
                showConfirmButton: false,
                timer: 2000,
            })
        </script>
    @endif
</body>

</html>
