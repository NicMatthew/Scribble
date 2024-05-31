<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
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
    <form class="content" name="edit-profile-form"  action="{{ route('update-profile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="big-container">
            <div class="data-details">
                <div class="input-row">
                    <div class="input-name">Name</div>
                    <input type="text" placeholder="Name" class="input-field" name="name" id="name" value="{{ $user->NameUser }}">
                </div>
                <div class="input-row">
                    <div class="input-name">Date of Birth</div>
                    <input type="date" placeholder="Date of Birth" class="input-field" id="dob" name="dob" value="{{ $user->DOBUser }}">
                </div>
                <div class="input-row">
                    <div class="input-name">Phone Number</div>
                    <input type="text" placeholder="Phone Number" class="input-field" id="phoneNumber" name="phoneNumber" value="{{ $user->PhoneNumberUser }}">
                </div>
                <div class="input-row">
                    <div class="input-name">Email</div>
                    <input type="text" placeholder="Email" class="input-field" name="email" id="email"  value="{{ $user->EmailUser }}">
                </div>
                <div class="input-row">
                    <div class="input-name">Password</div>
                    <input type="password" class="input-field password-input" name="password" id="password" value="••••••••">
                </div>
            </div>
            <div class="profile-wrapper">
                <img src="{{ $user->ImageUser }}" class="profile-pict" id="profile-pict">
                <img src="/icons/edit.svg" class="edit-btn" id="edit-btn">
            </div>
        </div>
        <input type="file" accept="image/*" name="image" class="input-image" id="input-image">
        <!-- <div class="submit-btn">Confirm</div> -->
        <div type="submit" class="submit-btn" id="submit-btn">Confirm</div>
    </form>
</body>
</html>
