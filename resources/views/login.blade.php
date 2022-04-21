<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a href="a">Register</a>
        </form>
    </div>
</body>

</html>
