    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Detail | Scribble</title>
        <link rel="shortcut icon" href="/images/simple_logo.svg">
        <link href="/css/variable.css" rel="stylesheet">
        <link href="/css/product-detail.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="/js/product-detail.js" defer=""></script>
        <script src="/js/product-card.js" defer=""></script>
    </head>
    <body>
        @include('components/navbar')
        <div id="login-status" data-logged-in="{{ auth()->check() ? 'true' : 'false' }}"></div>
        <div class="big-container">
            <div class="back-button">
                <img src="/icons/prev.svg" alt="">
            </div>
            <div class="right">
                <div class="product">
                    <div class="left-photo">
                        <div class="main" id="main-photo">

                        </div>
                        <div class="wrapper">
                            <i id="left" class="fa-solid fa-angle-left"></i>
                            <div class="carousel">
                            </div>
                            <i id="right" class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>

                    <div class="right-detail">
                        <div class="title-product mb-0">
                            <p class="mb-0">{{$selectedProduct->NameProduct}}</p>
                        </div>
                        <div class="rating-sell mb-1 mt-0" style="display: flex; align-items:center">
                            <div class="rating mb-0">
                                @for($i = 0; $i < $selectedProduct->Rating; $i++)
                                    <img src="/icons/star.svg">
                                @endfor
                                @for($i = 0; $i < 5 - $selectedProduct->Rating; $i++)
                                    <img src="/icons/star-empty.svg">
                                @endfor
                            </div>
                            <div class="review-sold" style="display: flex; align-items:center">
                                <p class="mb-0 b3">(0 reviews) | 0 Sold- yang ini blom</p>
                            </div>
                        </div>
                        <div class="price-product mb-1 b2" style="display: flex; align-items:center">
                            <p class="mb-0" id="price-display"></p>
                        </div>
                        <div class="variant mb-2 mt-1" style="display: flex; align-items:center">
                            <p class="mb-0 mr-1 b3" style="width: 14%; color: rgba(117,117,117,0.75);">Variant : </p>
                            <div class="var-opt">
                                @foreach ($variants as $variant)
                                    <div class="btn-var variantOpt" style="font-family:helvetica; text-decoration: none; padding: 12px 20px; border-radius: 15px; display:flex; flex-direction: row; align-items:center;">
                                        <p class="mb-0" style="">{{$variant->VariantName}}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="quantity mb-1 mt-1">
                            <div class="plus-minus" style="display:flex; align-items: center;">
                                <img src="/icons/minus.svg" style="width: 22px; height: 22px" id="minus-btn" class="btn-quantity">
                                <p class="mb-0 ml-2 mr-2" id="quantity-display">1</p>
                                <img src="/icons/plus.svg" style="width: 22px; height: 22px" alt="" id="plus-btn" class="btn-quantity">
                            </div>
                            <p class="mb-0 ml-3 b3" style="color: rgba(117,117,117,0.75);" id="available-quan-disp">19 pieces available</p>
                        </div>
                        <div class="check-out">
                            <div id="add-to-cart-btn" class="btn mr-2" style="text-decoration: none; padding: 20px 25px; border-radius: 15px; display:flex; flex-direction: row; align-items:center;">
                                <img src="/icons/cart-product-detail.svg" alt="">
                                <p class="mb-0 ml-2 b3" style="font-weight:bold; color:white">Add to Cart</p>
                            </div>
                            <form action="{{ route('cart.add') }}" method="POST" id="add-to-cart-form" style="display: none" name="add-to-cart-form">
                                @csrf
                                <input type="text" name="product_id" value="{{ $selectedProduct->ProductID }}">
                                <input type="text" name="quantity" value="" id="quantity-input">
                                <input type="number" name="price" value="" id="price-input">
                                <input type="number" name="user_id" value="{{ auth()->id() }}">
                                <input type="text" name="var" value="" id="variant-input">
                            </form>
                            <a id="buy-now-btn" href="" class="btn-2 mr-3" style="text-decoration: none; padding: 20px 25px; border-radius: 15px; display:flex; flex-direction: row; align-items:center;">
                                <p class="mb-0 b3" style="font-weight:bold ;color:white">Buy Now</p>
                            </a>
                            <form action="{{ route('buy.now') }}" method="GET" id="buy-now-form" style="display: none;">
                                <input type="hidden" name="productIDs[]" value="{{ $selectedProduct->ProductID }}">
                                <input type="hidden" name="quantities[]" value="" id="quantity-input-2"> 
                                <input type="hidden" name="price[]" value="" id="price-input-2">
                                <input type="hidden"  name="user_id" value="{{ auth()->id() }}">
                                <input type="hidden" name="variants[]" value="" id="variant-input-2">
                            </form>
                            <div class="wishlist">
                                <form action="{{ route('wishlist-toggle') }}" method="POST" name="wish-form">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $selectedProduct->ProductID }}">
                                    <input type="hidden" name="url" value="" id="urlInput">
                                    <button class="wish">
                                        <img src="{{ $selectedProduct->inWishlist ? '/icons/love-fill.svg' : '/icons/love-outline.svg' }}" alt="Toggle Wishlist">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="description">
                    <p class="title-desc mb-1">Product Description</p>
                    <p class="product-desc mb-0" id="product-desc">{{ $selectedProduct->DescriptionProduct }}</p>
                </div>

                <div class="rating-review">
                    <p class="title-rating-review mb-1">Product Ratings</p>
                    <div class="container-rate" style="display: flex; align-items:center;">
                        <div class="rate-product">
                            <img src="/icons/star-sharper.svg" alt="">
                            <div class="rate">
                                <div class="rating-numb">
                                    <p class="main-rate mb-0">4.7</p>
                                    <p class="standard b3 mb-0">/5</p>
                                </div>
                                <p class="many-users b3 mt-0 mb-0">Based on 100 reviews</p>
                            </div>
                        </div>

                        <div class="dropdown-filter">
                            <div class="rate-filter">
                                <div class="left-part mr-3" style="display: flex; align-items:center; flex-direction:row">
                                    <img src="/icons/sort-review.svg" class="ml-3" alt="sort">
                                    <p class="mb-0 ml-2 b3" style="display: flex; align-items:center; color:white">Sort By</p>
                                </div>
                                <div class="right-part" style="display: flex; align-items:center">
                                    <img src="/icons/chevron-down.svg" class="mr-3" alt="down">
                                </div>
                                <ul class="dropdown-filter-content">
                                    <li class="b3" style="display: flex; align-items:center"><img src="/icons/star.svg"  style="width: fit-content"; class="mr-1"><a href="#" style="text-decoration:none">5 Star</a></li>
                                    <li class="b3" style="display: flex; align-items:center"><img src="/icons/star.svg" style="width: fit-content"; class="mr-1"><a  href="#" style="text-decoration:none">4 Star</a></li>
                                    <li class="b3" style="display: flex; align-items:center"><img src="/icons/star.svg" style="width: fit-content"; class="mr-1"><a href="#" style="text-decoration:none">3 Star</a></li>
                                    <li class="b3" style="display: flex; align-items:center"><img src="/icons/star.svg" style="width: fit-content"; class="mr-1"><a href="#" style="text-decoration:none">2 Star</a></li>
                                    <li class="b3" style="display: flex; align-items:center"><img src="/icons/star.svg" style="width: fit-content"; class="mr-1"><a href="#" style="text-decoration:none">1 Star</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-3 mt-3" style="border-bottom: 1px solid #D9D9D9">
                    <div class="review">
                        <div class="review-detail">
                            <div class="review-profile mr-3">
                                <img src="/icons/people-review.svg" style="width: 50px; height: 50px">
                            </div>
                            <div class="review-detail-right">
                                <p class="mb-1">Jesslyn Tanuwijaya</p>
                                <div class="review-star mb-0">
                                    <img src="/icons/star.svg">
                                    <img src="/icons/star.svg">
                                    <img src="/icons/star.svg">
                                    <img src="/icons/star.svg">
                                    <img src="/icons/star.svg">
                                </div>
                            </div>
                        </div>
                        <p class="review-desc mb-0 mt-2">Alhamdulillah sampe dgn aman, Sesuai ekspetasi, kualitas produk baik. Karena biasa pakai yang series watercolor, pakai yang classic rasanya beda. Hasil lebih pigmented yang watercolor cuma lebih halus yang classic.</p>
                        <div class="review-photo mt-2">
                            <div class="review-ph1">

                            </div>
                            <div class="review-ph1">

                            </div>
                        </div>
                    </div>
                    <hr class="mb-3 mt-3" style="border-bottom: 1px solid #D9D9D9">
                    <div class="review">
                        <div class="review-detail">
                            <div class="review-profile mr-3">
                                <img src="/icons/people-review.svg" style="width: 50px; height: 50px">
                            </div>
                            <div class="review-detail-right">
                                <p class="mb-1">Jesslyn Tanuwijaya</p>
                                <div class="review-star mb-0">
                                    <img src="/icons/star.svg">
                                    <img src="/icons/star.svg">
                                    <img src="/icons/star.svg">
                                    <img src="/icons/star.svg">
                                    <img src="/icons/star.svg">
                                </div>
                            </div>
                        </div>
                        <p class="review-desc mb-0 mt-2">Alhamdulillah sampe dgn aman, Sesuai ekspetasi, kualitas produk baik. Karena biasa pakai yang series watercolor, pakai yang classic rasanya beda. Hasil lebih pigmented yang watercolor cuma lebih halus yang classic.</p>
                        <div class="review-photo mt-2">
                            <div class="review-ph1">

                            </div>
                            <div class="review-ph1">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="suggest mt-3">
                    <p class="mb-3">You May Also Like</p>
                </div>
            </div>
        </div>

        <div class="product-suggest">
            <div class="wrapper-2">
                <i id ="left-2" class="fa-solid fa-angle-left"></i>
                <ul class="carousel-2">
                    @if ($products->isNotEmpty())
                        @foreach ($products as $product)
                            <li class="card">
                                @include('components/product-card', ['product' => $product])
                            </li>
                        @endforeach
                    @endif
                </ul>
                <i id ="right-2" class="fa-solid fa-angle-right"></i>
            </div>
        </div>

        {{-- <!-- <div class="product-suggest">
            <div class="wrapper-2">
                <div class="carousel-2">
                    @include('components/product-card')
                    @include('components/product-card')
                    @include('components/product-card')
                    @include('components/product-card')
                </div>
            </div>
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
        </div> --> --}}


        @include('components/footer')
        <script>
            let variants = {!! json_encode($variants->toArray()) !!}
        </script>
    </body>
    </html>
