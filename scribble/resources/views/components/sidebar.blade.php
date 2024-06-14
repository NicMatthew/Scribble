<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/sidebar.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-top">
            <a href="#" class="b2 profile" style="text-decoration: none">Profile</a>
            <a href="#" class="b2 transaction-list" style="text-decoration: none">Transaction List</a>
            <a href="/wishlist" class="b2 wishlist" style="text-decoration: none">Wishlist</a>
        </div>
        <form class="sidebar-bottom" name="" action="{{route("log-out")}}" method="POST">
            @csrf
            <button class="b2 log-out-btn" style="text-decoration: none" type="submit">Log out</button>
        </form>
    </div>
</body>
</html>
