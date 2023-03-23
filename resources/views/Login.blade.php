<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{ asset('assests/cust.css') }}">

<body>
    <section id="one">
        <div class="box">
            <p>Login</p>
            <form class="form1" method="post" action="{{ route('login-form') }}">
                @csrf
                <label for="name" class="label1">Email:</label>
                <input type="text" class="area" name="email" id="first"><br>
                <label for="email" class="label1">Password:</label>
                <input type="password" class="area" name="password" id="second"><br>
                <a href='Register'>Register</a>
                <input type="submit" value="Login" class="btn" name="sub" id="ok">
            </form>
        </div>
    </section>
</body>
</html>