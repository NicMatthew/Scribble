<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="/css/edit-profile.css">
    <link rel="stylesheet" href="/css/variable.css">
    <script src="/js/edit-profile.js" defer=""></script>
</head>
<body>
    @include("components/navbar-logo")
    <div class="header">
        <div class="back-btn" onclick="history.back()">
            <img src="/icons/prev.svg">
        </div>
        <div class="header-title">Edit Profile</div>
    </div>
    <form class="content" name="">
        <div class="big-container">
            <div class="data-details">
                <div class="input-row">
                    <div class="input-name">Name</div>
                    <input type="text" placeholder="Name" class="input-field" name="name">
                </div>
                <div class="input-row">
                    <div class="input-name">Date of Birth</div>
                    <input type="date" placeholder="Date of Birth" class="input-field" name="dob">
                </div>
                <div class="input-row">
                    <div class="input-name">Phone Number</div>
                    <input type="text" placeholder="Phone Number" class="input-field" name="phoneNumber">
                </div>
                <div class="input-row">
                    <div class="input-name">Email</div>
                    <input type="text" placeholder="Email" class="input-field" name="email">
                </div>
                <div class="input-row">
                    <div class="input-name">Password</div>
                    <input type="text" placeholder="Password" class="input-field" name="password">
                </div>
            </div>
            <div class="profile-wrapper">
                <img src="/images/pict1.jpg" class="profile-pict" id="profile-pict">
                <img src="/icons/edit.svg" class="edit-btn" id="edit-btn">
            </div>
        </div>
        <input type="file" accept="image/*" name="image" class="input-image" id="input-image">
        <div class="submit-btn">Confirm</div>
    </form>
</body>
</html>
