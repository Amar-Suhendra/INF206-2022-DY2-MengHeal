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
  <title>Mengheal | Register</title>
</head>

<body class="register-body">
  <div class="register-box">
    <img src="assets/img/logo.png" class="register-avatar">
    <h1 class="register-h1 mt-5">Register Here</h1>
    <form method="POST" action="{{ url('register') }}">
      @csrf
      <p>Name</p>
      <input type="text" name="Name" placeholder="Enter Name" class="form-control">
      <p>Username</p>
      <input type="text" name="Username" placeholder="Enter Username" class="form-control">
      <p>Email</p>
      <input type="email" name="Email" placeholder="Enter Email" class="form-control">
      <p>Password</p>
      <input type="password" name="Password" placeholder="Enter Password" class="form-control">
      
      <input type="submit" name="submit" value="Register">
      <a class="fpass text-white" href="{{ url('login') }}">Have an account? Login</a>
    </form>
    <a class="btn btn-primary mt-3 text-white" href="/" role="button">Back</a>
  </div>
</body>

</html>
