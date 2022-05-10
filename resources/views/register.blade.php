<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>

<body class="register-body">
    <div class="register-box">
        <img src="assets/img/logo.png" class="register-avatar">
        <h1 class="register-h1">Register Here</h1>
        <form method="POST" action="{{ url('register') }}">
            @csrf
            <p>Name</p>
            <input type="text" name="Name" placeholder="Enter Name">
            <p>Username</p>
            <input type="text" name="Username" placeholder="Enter Username">
            <p>Email</p>
            <input type="email" name="Email" placeholder="Enter Email">
            <p>Password</p>
            <input type="Password" name="Password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Register">
            <a href="{{ url('login') }}">Have an account? Login</a>
        </form>
    </div>
</body>

</html>
