<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction List</title>
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/wishlist.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                <p class="h2">My Wishlist</p>
                <p class="b3 title-detail">19 stuffs on your wishlist</p>
            </div>
            <div class="content-right-side">
                @include('components/product-card')
                @include('components/product-card')
                @include('components/product-card')
                @include('components/product-card')
                @include('components/product-card')
                @include('components/product-card')
                @include('components/product-card')
                @include('components/product-card')
            </div>
    </div>
</body>
</html>
