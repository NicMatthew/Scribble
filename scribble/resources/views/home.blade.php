<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Scribble</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="/css/variable.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
</head>
<body>
    <div class="banner-section">
        <div class="banner">
            <img src="/images/pict1.jpg">
            <div class="prev-next">
                <img src="/icons/prev.svg">
                <img src="/icons/next.svg">
            </div>
        </div>
        <div class="bullet-container">
            <div class="bullet"></div>
            <div class="bullet"></div>
            <div class="bullet"></div>
        </div>
    </div>
    <div class="categories-section">
        <div class="categories-title">
            <h2>Categories</h2>
        </div>
        <div class="categories-container">
            <a class="category" href="">
                <div class="wrapper sec-2">
                    <img src="/images/pen.png">
                </div>
                <h5>Pens</h5>
            </a>
            <a class="category" href="">
                <div class="wrapper prim-1">
                    <img src="/images/pencil.png">
                </div>
                <h5>Pencils</h5>
            </a>
            <a class="category" href="">
                <div class="wrapper sec-1">
                    <img src="/images/marker.png">
                </div>
                <h5>Markers</h5>
            </a>
            <a class="category" href="">
                <div class="wrapper prim-2">
                    <img src="/images/paper.png">
                </div>
                <h5>Papers</h5>
            </a>
            <a class="category" href="">
                <div class="wrapper prim-2">
                    <img src="/images/book.png">
                </div>
                <h5>Books</h5>
            </a>
            <a class="category" href="">
                <div class="wrapper sec-1">
                    <img src="/images/cutter.png">
                </div>
                <h5>Cutter</h5>
            </a>
            <a class="category" href="">
                <div class="wrapper sec-2">
                    <img src="/images/glue.png">
                </div>
                <h5>Glue</h5>
            </a>
            <a class="category" href="">
                <div class="wrapper prim-1">
                    <img src="/images/tape-ex.png">
                </div>
                <h5>Correcting Tools</h5>
            </a>
        </div>
        <a class="btn">
            <h5>Explore All Products</h5>
        </a>
    </div>
    <div class="products-section">
        <div class="products-title">
            <h2>Best Sellers</h2>
        </div>
        <div class="products-container">
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
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
