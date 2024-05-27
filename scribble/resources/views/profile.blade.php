<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/profile.css">
</head>
<body>
    <div class="navbar">
        @include('components/navbar-logo')
    </div>
    <div class="content">
        <div class="left-side">
            @include('components/sidebar')
        </div>
        <div class="right-side">
            <div class="title">
                <p class="h2">Profile</p>
            </div>
            <div class="content-right-side">
                <div class="profile-data">
                    <div class="part-of-profile-data">
                        <div class="icon">
                            <img src="/icons/profile-name.svg" alt="">
                        </div>
                        <div class="profile-data-content">
                            <p class="b2 profile-data-header">Name</p>
                            <p class="b1">Matthew</p>
                        </div>
                    </div>
                    <div class="part-of-profile-data">
                        <div class="icon">
                            <img src="/icons/profile-email.svg" alt="">
                        </div>
                        <div class="profile-data-content">
                            <p class="b2 profile-data-header">Email</p>
                            <p class="b1">matthew@gmail.com</p>
                        </div>
                    </div>
                    <div class="part-of-profile-data">
                        <div class="icon">
                            <img src="/icons/profile-dob.svg" alt="">
                        </div>
                        <div class="profile-data-content">
                            <p class="b2 profile-data-header">Date of Birth</p>
                            <p class="b1">24 January 2000</p>
                        </div>
                    </div>
                    <div class="part-of-profile-data">
                        <div class="icon">
                            <img src="/icons/profile-phone.svg" alt="">
                        </div>
                        <div class="profile-data-content">
                            <p class="b2 profile-data-header">Phone Number</p>
                            <p class="b1">08123456789</p>
                        </div>
                    </div>
                    <div class="part-of-profile-data">
                        <div class="icon">
                            <img src="/icons/profile-password.svg" alt="">
                        </div>
                        <div class="profile-data-content">
                            <p class="b2 profile-data-header">Password</p>
                            <div class="pass">
                                <img src="/icons/password.svg" alt="">
                                <img src="/icons/password.svg" alt="">
                                <img src="/icons/password.svg" alt="">
                                <img src="/icons/password.svg" alt="">
                                <img src="/icons/password.svg" alt="">
                                <img src="/icons/password.svg" alt="">
                                <img src="/icons/password.svg" alt="">
                                <img src="/icons/password.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-pic">
                    <div class="profile-wrapper">
                        <img src="/images/pict1.jpg" class="profile-pict" id="profile-pict">
                    </div>
                    <div class="edit-button-wrapper">
                        <a href="#" class="b2 edit-profile-btn">
                            Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
