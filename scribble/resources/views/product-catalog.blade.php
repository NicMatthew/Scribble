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
    <style>
        .dropdown-trigger a{
            color: white;
        }
    </style>
</head>
<body>
    @include('components/navbar')
    <div class="menu mb-0">
        @foreach ($categories as $category)
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <p onclick="return false" class="category_select">{{ $category->NameCategory }}</p>
                <ul class="dropdown-content">
                    @foreach ($subcategories as $subcategory)
                    @if($category->CategoryProductID == $subcategory->CategoryProductID)
                    <li class="b3 sub_category_select">{{ $subcategory->NameSubCategory }}</li>
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
                @if($search == null)
                    <p class="h2">{{ $category_select ?? 'All Products' }}</p>
                    @if($subcategory_select != null || $subcategory_select != "")
                        <img src="/icons/chevron-right.svg" alt="right">
                        <p class="b1">{{ $subcategory_select }}</p>
                    @endif
                @else
                    <p class="h2"> Search Result of : {{ $search }}</p>
                @endif
            </div>
            <div class="right-heading">
                <div class="b3 dropdown-sort">
                    <div class="sort-btn">
                        <div class="left-part">
                            <img src="/icons/sort.svg" alt="sort" style="width: 25%">
                            <p class="mb-0 b3" style="display: flex; align-items:center" id="sort_title">{{ $sorting ?? "Sort By"}}</p>
                        </div>
                        <div class="right-part">
                            <img src="/icons/chevron-down.svg" alt="down" style="width: 80%">
                        </div>
                        <ul class="dropdown-sort-content">
                            <li class="b3 sorting"><a href="#" style="text-decoration:none">Top Sales</a></li>
                            <li class="b3 sorting"><a  href="#" style="text-decoration:none">Lowest Price</a></li>
                            <li class="b3 sorting"><a href="#" style="text-decoration:none">Highest Price</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-container">
            @if ($search && $paginatedProducts->isEmpty())
            <div class="container-error-msg">
                <img src="/icons/error-icon-2.png" alt="">
                <p class="notFoundMsg b1"> Product not found </p>
            </div>
            @endif

            @if ($paginatedProducts->isNotEmpty())
                    @foreach ($paginatedProducts as $product)
                        @include('components/product-card', ['product' => $product])
                    @endforeach
            @endif
        </div>
        <div class="pagination-links">
            {{ $paginatedProducts->links() }}
        </div>
    </div>
    @include('components/footer')
    <form id="form_catalog" style="display: none" name="form_catalog" method="GET" action="{{ route("product-catalog") }}">
        @if ($subcategory_select == null)
            <input type="text" name="category" value="{{ $category_select }}">
        @else
            <input type="text" name="category" value="">
        @endif
        <input type="text" name="sub_category" value="{{$subcategory_select}}">
        {{-- <input type="text" name="search" value="{{ $search }}"> --}}
        <input type="text" name="sorting" value="{{$sorting}}">
    </form>
</body>
<script src="/js/product-catalog.js"></script>
</html>
