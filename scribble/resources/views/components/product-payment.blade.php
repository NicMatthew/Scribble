<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Payment</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/product-payment.css">
</head>
<body>
    <div class="product">
        <img src="{{ $product['productImage'] }}" class="product-img">
        <div class="product-details">
            <div class="product-title">{{ $product['productName'] }}</div>
            <div class="product-price">Rp. {{ number_format($product['productPrice'] * $product['quantity']?? 0, 0, ',', '.') }}</div>
            <div class="product-quantity"> Quantity : {{ $product['quantity'] }}</div>
        </div>
    </div>
</body>
</html>
