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
    @include('components/navbar-logo')
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
                        <p class="b1 order-id">OD001</p>
                        <p class="b1 status">Packaged</p>
                    </div>
                </div>
                <div class="main-content">
                    <div class="grand-total">
                        <p class="b2">Grand Total: <span class="b1 total">Rp 54.000</span></p>
                    </div>
                    <div class="all-items">
                        <div class="item">
                            <div class="item-set">
                                <div class="left-side-item">
                                    <img src="/icons/sample-item.jpg" alt="">
                                </div>
                                <div class="middle-side-item">
                                    <div class="item-name">
                                        <p class="h2 name-item">Item 1</p>
                                    </div>
                                    <div class="item-desc">
                                        <div class="total-price">
                                            <p class="b2 total-price-text">Total Price:</p>
                                            <p class="b1 price-text">Rp. 26.000</p>
                                        </div>
                                        <div class="qty">
                                            <p class="b2 qty-text">Quantity: 3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-side-item">
                                <a href="#" class="buy-again-btn">
                                    <img src="/icons/trolley.svg" alt="tes">
                                    <p class="b2 buy-again-text">Buy Again</p>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-set">
                                <div class="left-side-item">
                                    <img src="/icons/sample-item.jpg" alt="">
                                </div>
                                <div class="middle-side-item">
                                    <div class="item-name">
                                        <p class="h2 name-item">Item 1</p>
                                    </div>
                                    <div class="item-desc">
                                        <div class="total-price">
                                            <p class="b2 total-price-text">Total Price:</p>
                                            <p class="b1 price-text">Rp. 26.000</p>
                                        </div>
                                        <div class="qty">
                                            <p class="b2 qty-text">Quantity: 3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-side-item">
                                <a href="#" class="buy-again-btn">
                                    <img src="/icons/trolley.svg" alt="tes">
                                    <p class="b2 buy-again-text">Buy Again</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>