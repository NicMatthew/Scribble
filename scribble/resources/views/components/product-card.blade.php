<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link href="/css/variable.css" rel="stylesheet">
    <link href="/css/product-card.css" rel="stylesheet">
</head>
<body>
    <a class="product-card" href="">
        <div class="product-img">
            <!-- <img src="{{ $product->images->first()->image_path }}" alt="{{ $product->NameProduct }}"> -->
             <img src="{{ $product->ProductImage }}" alt="{{ $product->NameProduct }}">
            <!-- <img src="{{ $product->ProductImage }}"> -->
        </div>
        <hr class="divider">
        <div class="product-details">
            <div class="title-wish">
                <h3 class="product-title">{{ $product->NameProduct}}</h3>
                <div class="wish" onclick="return false">
                    <img src="/icons/love-outline.svg">
                </div>
            </div>
            <div class="rating-sell">
                <div class="rating">
                @for ($i = 0; $i < 5; $i++)
                    @if ($i < $product->Rating)
                        <img src="/icons/star.svg">
                    @else
                        <img src="/icons/star.svg">
                    @endif
                @endfor
                    <!-- <img src="/icons/star.svg">
                    <img src="/icons/star.svg">
                    <img src="/icons/star.svg">
                    <img src="/icons/star.svg">
                    <img src="/icons/star.svg"> -->
                </div>
                <h5 class="sell">100 Terjual</h5>
            </div>
            <div class="price">
                <h4>{{ $product-> Price}}</h4>
            </div>
        </div>
    </a>
</body>
</html>
