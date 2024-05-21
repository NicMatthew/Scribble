<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="\css\sign-up.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <img src="\images\Scribble_Logo.png" alt="Scribble's Logo">
            <div class=input-box>
                <h3>Name</h3>
                <input type="text" placeholder="Name" required>
            </div>
            <div class="input-box">
                <h3>Date of Birth</h3>
                <input type="date" placeholder="Date of Birth" required>
            </div>

            <div class=input-box>
                <h3>Phone Number</h3>
                <input type="text" placeholder="Phone Number" required>
            </div>

            <div class=input-box>
                <h3>Email</h3>
                <input type="text" placeholder="Email" required>
            </div>

            <div class="input-box">
                <h3>Password</h3>
                <input type="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn">Sign Up</button>

            <div class="register-link">
                <p>Already have an account? <a href="/log-in">Log In</a></p>
            </div>
        </div>
    </div>
    
</body>
</html>