<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shipping</title>
    <link rel="stylesheet" href="/css/shipping.css">
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/header-standard.css">
    <link rel="stylesheet" href="/css/steps-info.css">
    <script src="/js/shipping.js" defer=""></script>
</head>
<body>
    <div class="header">
        <div class="back-btn" onclick="history.back()">
            <img src="/icons/prev.svg">
        </div>
        <div class="header-title">Shipping</div>
        <hr class="divider">
    </div>
    <div class="steps-info">
        <div class="step prim-1-fill passive">
            <div class="step-counter">Step 1</div>
            <div class="step-detail">Cart</div>
        </div>
        <img src="/icons/chevron-right.svg" class="step-icon">
        <div class="step sec-1-fill">
            <div class="step-counter">Step 2</div>
            <div class="step-detail">Shipping</div>
        </div>
        <img src="/icons/chevron-right.svg" class="step-icon">
        <div class="step sec-2-fill disable-fill">
            <div class="step-counter">Step 3</div>
            <div class="step-detail">Payment</div>
        </div>
    </div>
    <div class="main-content">
        <div class="address-container">
            <div class="address-info">
                <div class="address-title">Destination Address</div>
                <div class="address-detail">
                    <div class="address-name">Rumah Talenta BCA</div>
                    <div class="address-full">Jl. Pakuan No. 5, Kelurahan Sumur Batu, Kecamatan Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</div>
                </div>
            </div>
            <a href="" class="address-select">Select</a>
        </div>
        <div class="product-payment-container">
            <div class="product-container">
                <div class="product-header">Products</div>
                <div class="product-wrapper">
                    @include("components/product-payment")
                    @include("components/product-payment")
                    @include("components/product-payment")
                    @include("components/product-payment")
                    @include("components/product-payment")
                </div>
            </div>
            <div class="payment-container">
                <div class="payment-wrapper">
                    <div class="payment-header">Payment Details</div>
                    <div class="payment-list">
                        <div class="list">
                            <div class="payment-name">Subtotal produk</div>
                            <div class="payment-price">Rp. 100.000</div>
                        </div>
                        <div class="list">
                            <div class="payment-name">Biaya pengiriman</div>
                            <div class="payment-price">Rp. 5.000</div>
                        </div>
                        <div class="list">
                            <div class="payment-name">Discount</div>
                            <div class="payment-price">Rp. 0</div>
                        </div>
                        <div class="list">
                            <div class="payment-name final">Total payment</div>
                            <div class="payment-price final">Rp. 105.000</div>
                        </div>
                    </div>
                </div>
                <div class="voucher-wrapper">
                    <div class="voucher-header">
                        <img src="/icons/voucher.svg">
                        <div class="voucher-title">Voucher</div>
                    </div>
                    <div class="voucher-btn" id="voucher-btn">Select</div>
                </div>
                <a href="" class="pay-btn">Pay Now</a>
            </div>
        </div>
    </div>
    <div class="modal" id="modal">
        <div class="select-voucher">
            <div class="header">
                <div class="close-btn" id="close-btn">
                    <img src="/icons/close.svg">
                </div>
                <div class="header-title">Discount</div>
                <hr class="divider">
            </div>
            <div class="voucher-list">
                @include("components/voucher")
                @include("components/voucher")
                @include("components/voucher")
                @include("components/voucher")
                @include("components/voucher")
            </div>
        </div>
    </div>
</body>
</html>
