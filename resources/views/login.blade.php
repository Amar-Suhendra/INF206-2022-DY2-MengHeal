<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shorcut icon" href="/assets/icon/icon.ico">
  <link rel="stylesheet" href="style/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Mengheal | Login</title>
</head>

<body class="login-body">
  <div class="login-box">
    <img src="assets/img/logo.png" class="login-avatar">
    <h1 class="login-h1 mt-5">Login Here</h1>
    <form action="{{ url('login') }}" method="post">
      @csrf
      <p>Username</p>
      <input type="text" name="Username" placeholder="Enter Username" required class="form-control">
      <p>Password</p>
      <input type="Password" name="Password" placeholder="Enter Password" required class="form-control">
      <input type="submit" name="submit" value="Login">
      <a class="text-white fpass" href="{{ url('register') }}">
        Don't have an account? Register Here!
      </a>
    </form>
    <a class="btn btn-primary mt-3 text-white" href="/" role="button">Back</a>
  </div>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if (session('register'))
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Pendaftaran Berhasil!',
        text: 'Silahkan hubungi admin untuk konfirmasi lebih lanjut',
        showConfirmButton: false,
        timer: 2000,
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
