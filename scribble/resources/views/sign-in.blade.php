<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="\css\sign-up.css">
    <script src="/js/sign-in.js" defer=""></script>
</head>
<body>
    <div class="container">
        <form class="wrapper" name="sign-in-form" method="POST" action="{{route("createUser")}}">
            @csrf
            <img src="\images\Scribble_Logo.png" alt="Scribble's Logo">
            <div class="input-box">
                <h3>Name</h3>
                <input type="text" placeholder="Name" name="name" id="name" required>
            </div>
            <div class="input-box">
                <h3>Date of Birth</h3>
                <input type="date" placeholder="Date of Birth" name="DOB" id="dob" required>
            </div>

            <div class="input-box">
                <h3>Phone Number</h3>
                <input type="text" placeholder="Phone Number" name="phoneNumber" id="phoneNumber" required>
            </div>

            <div class="input-box">
                <h3>Email</h3>
                <input type="email" placeholder="Email" name="email" id="email" required>
            </div>

            <div class="input-box">
                <h3>Password</h3>
                <input type="password" placeholder="Password" name="password" id="password" required>
            </div>

            <div class="btn" id="submit-btn">Sign Up</div>

            <div class="register-link">
                <p>Already have an account? <a href="{{route("log-in")}}">Log In</a></p>
            </div>
        </form>
    </div>

</body>
</html>
