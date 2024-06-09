<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4d9121ebec.js" crossorigin="anonymous"></script>
    <title>Product Catalog</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/product-catalog.css">
    <script src="/js/product-card.js" defer=""></script>
</head>
<body>
    @include('components/navbar')
    <div class="menu mb-0">
        @foreach ($categories as $category)
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a onclick="return false" style="text-decoration:none" class="category_select">{{ $category->NameCategory }}</a>
                <ul class="dropdown-content">
                    @foreach ($subcategories as $subcategory)
                    @if($category->CategoryProductID == $subcategory->CategoryProductID)
                    <li class="b3 sub_category_select"><a href="#" style="text-decoration:none" >{{ $subcategory->NameSubCategory }}</a></li>
                    @endif
                    @endforeach
                </ul>
            </li>
        </ul> 
        @endforeach
    </div>
    <div class="content">
        <div class="heading">
            <div class="left-heading">
                <p class="h2">{{ $category_select ?? 'All Products' }}</p>
                <img src="/icons/chevron-right.svg" alt="right">
                <p class="b1">{{ $subcategory_select }}</p>
            </div>
            <div class="right-heading">
                <div class="b3 dropdown-sort">
                    <div class="sort-btn">
                        <div class="left-part">
                            <img src="/icons/sort.svg" alt="sort">
                            <p class="mb-0 b3" style="display: flex; align-items:center">Sort By</p>
                        </div>
                        <div class="right-part">
                            <img src="/icons/chevron-down.svg" alt="down">
                        </div>
                        <ul class="dropdown-sort-content">
                            <li class="b3"><a href="#" style="text-decoration:none">Top Sales</a></li>
                            <li class="b3"><a  href="#" style="text-decoration:none">Lowest Price</a></li>
                            <li class="b3"><a href="#" style="text-decoration:none">Highest Price</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-container">
            @if ($search && $products->isEmpty())
            <div class="container-error-msg">
                <img src="/icons/error-icon-2.png" alt="">
                <p class="notFoundMsg b1"> Product not found </p>
            </div>
            @endif

            @if ($products->isNotEmpty())
                    @foreach ($products as $product)
                        @include('components/product-card', ['product' => $product])
                    @endforeach
            @endif            
        </div>
    </div>
    @include('components/footer')
    <form id="form_catalog" style="display: none" name="form_catalog" method="GET" action="{{ route("product_catalog") }}">
        <input type="text" name="category" value="">
        <input type="text" name="sub_category" value="">
        <input type="text" name="search" value="{{ $search }}">
        <input type="text" name="sorting" value="">
    </form>
</body>
<script src="/js/product-catalog.js"></script>
</html>
