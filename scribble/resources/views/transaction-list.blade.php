<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction List</title>
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/transaction-list.css">
</head>
<body>
    @include('components/navbar-before')
    <div class="content">
        <div class="left-side">
            @include('components/sidebar')
        </div>
        <div class="right-side">
            <div class="title">
                <p class="h1">Transaction List</p>
            </div>
            <div class="content-right-side">
                <div class="content-header">
                    <div class="content-header-left">
                        <img src="/icons/shopping-bag.svg" alt="">
                        <p class="b1">4 December 2023</p>
                    </div>
                    <div class="content-header-right">
                        <p class="b1">OD001</p>
                        <p class="b1 status">Packaged</p>
                    </div>
                </div>
                <div class="main-content">

                </div>
            </div>
        </div>
    </div>
</body>
</html>