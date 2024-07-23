<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Side Bar Admin</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/sidebar-admin.css">
</head>
<body>
    <div class="sidebar-container">
        <div class="sidebar-top">
            <img src="/images/Scribble_Logo.png" class="sidebar-logo">
            <div class="sidebar-menus ">
                <a href="/dashboard" class="sidebar-menu dashboard-page">
                    <img src="/icons/dashboard.svg" class="menu-icon">
                    <div class="menu-text prim-2-fill">Dashboard</div>
                </a>
                <a href="product-admin" class="sidebar-menu product-page">
                    <img src="/icons/products.svg" class="menu-icon">
                    <div class="menu-text prim-1-fill">Products</div>
                </a>
                <a href="/order-admin" class="sidebar-menu order-page">
                    <img src="/icons/orders.svg" class="menu-icon">
                    <div class="menu-text sec-2-fill">Orders</div>
                </a>
            </div>
        </div>
        <form class="sidebar-bottom" name="" action="{{route("log-out")}}" method="POST">
            @csrf
            <button type="submit" class="sidebar-menu">
                <img src="/icons/exit.svg">
                <p class="menu-text">Log out</p>
            </button>
        </form>
    </div>
</body>
</html>
