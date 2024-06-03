<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Scribble</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link href="/css/variable.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
    <script src="/js/product-card.js" defer=""></script>
    <script src="/js/home.js" defer=""></script>
</head>
<body>
    @include('components/navbar-before')
    <div class="banner-section">
        <div class="banner">
            <div class="banner-img" id="banner-carousel">
                <img src="/images/banner (1).png">
                <img src="/images/banner (2).png">
                <img src="/images/banner (6).png">
                <img src="/images/banner (7).png">
                <img src="/images/banner (5).png">
            </div>
            <div class="prev-next">
                <img src="/icons/prev.svg" id="prev-btn">
                <img src="/icons/next.svg" id="next-btn">
            </div>
        </div>
        <div class="bullet-container" id="bullet-container">
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
                <h5>Books & Papers</h5>
            </a>
            <a class="category" href="">
                <div class="wrapper prim-2">
                    <img src="/images/book.png">
                </div>
                <h5>Others</h5>
            </a>
            <a class="category" href="">
                <div class="wrapper sec-1">
                    <img src="/images/cutter.png">
                </div>
                <h5>Cutting Tools</h5>
            </a>
            <a class="category" href="">
                <div class="wrapper sec-2">
                    <img src="/images/glue.png">
                </div>
                <h5>Sticking Tools</h5>
            </a>
            <a class="category" href="">
                <div class="wrapper prim-1">
                    <img src="/images/tape-ex.png">
                </div>
                <h5>Correcting Tools</h5>
            </a>
        </div>
        <form action="{{ route('product_catalog') }}" method="GET" class="btn">
            <input type="hidden" name="show_all" value="true">
            <h5>Explore All Products</h5>
        </form>
    </div>
    <div class="products-section">
        <div class="products-title">
            <h2>New Arrivals</h2>
        </div>
        <div class="products-container">
            @foreach ($products as $product)
                @include('components/product-card')
            @endforeach
        </div>
    </div>
    @include('components/footer')
</body>
</html>
