@extends('layout/main')

@section('container')
    <div class="login-box">
        <h1>Login</h1>
        <form>
            <input type="text" name="Username" placeholder="Enter Username">
            <p>Password</p>
            <input type="Password" name="Password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="a">Forget Password</a>
        </form>
    </div>
@endsection
