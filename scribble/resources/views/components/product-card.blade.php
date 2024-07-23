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
    <a class="product-card" href="{{route("product-catalog")."/".$product->ProductID}}">
        <div class="product-img">
             <img src="{{ $product->ProductImage }}" alt="{{ $product->NameProduct }}">
        </div>
        <hr class="divider">
        <div class="product-details">
            <div class="title-wish">
                <h3 class="product-title">{{ $product->NameProduct}}</h3>
                <form action="{{ route('wishlist-toggle') }}" method="POST" name="wish-form">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->ProductID }}">
                    <input type="hidden" name="url" value="" id="urlInput">
                    <button class="wish">
                        <img src="{{ $product->inWishlist ? '/icons/love-fill.svg' : '/icons/love-outline.svg' }}" alt="Toggle Wishlist">
                    </button>
                </form>
            </div>
            <div class="btm-card">
                <div class="rating-sell">
                    <div class="rating">
                        {{-- @dump($product) --}}
                        <div class="rating mb-0">
                            @if (!is_null($product->stars) && ($product->stars['fullStars'] > 0 || $product->stars['halfStar'] || $product->stars['emptyStars'] > 0))
                            {{-- Full stars --}}
                            @for ($i = 0; $i < $product->stars['fullStars']; $i++)
                                <img src="/icons/star.svg">
                            @endfor
            
                            {{-- Half star if applicable --}}
                            @if ($product->stars['halfStar'])
                                <img src="/icons/star-half.svg">
                            @endif
            
                            {{-- Empty stars --}}
                            @for ($i = 0; $i < $product->stars['emptyStars']; $i++)
                                <img src="/icons/star-empty.svg">
                            @endfor
                        @else
                            {{-- Display 5 empty stars if no stars data available --}}
                            @for ($i = 0; $i < 5; $i++)
                                <img src="/icons/star-empty.svg">
                            @endfor
                        @endif
                        </div>
                    </div>
                    <h5 class="sell">{{ $product->totalQuantitySold }} Sold</h5>
                </div>
                <div class="price">
                    <h4>Rp. {{ number_format($product-> Price, 0, ',','.')}}</h4>
                </div>
            </div>
        </div>
    </a>
</body>
</html>
