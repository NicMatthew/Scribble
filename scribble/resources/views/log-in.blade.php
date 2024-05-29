<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scribble | Log In</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="\css\log-in.css">
</head>
<body>
    <div class="container">
        <form class="wrapper" name="login-form" method="POST" action="{{route("authenticate")}}">
            @csrf
            <img src="\images\Scribble_Logo.png" alt="Scribble's Logo">
            <div class=input-box>
                <h3>Email</h3>
                <input type="text" placeholder="Email" name="email" required>
            </div>
            <div class="input-box">
                <h3>Password</h3>
                <input type="password" placeholder="Password" name="password" required>
            </div>

            <button type="submit" class="btn">Log In</button>

            <div class="register-link">
                <p>Don't have an account? <a href="{{route("sign-in")}}">Sign In</a></p>
            </div>
        </form>
    </div>

</body>
</html>
