<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/cart.css">
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/steps-info.css">
    <link rel="stylesheet" href="/css/header-standard.css">
    <script src="/js/cart.js" defer=""></script>
    <title>Cart | Scribble</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="back-btn" onclick="history.back()">
                <img src="/icons/prev.svg">
            </div>
            <div class="header-title">Cart</div>
            <hr class="divider">
        </div>
        <div class="container-cart">
            <div class="steps-info">
                <div class="step prim-1-fill">
                    <div class="step-counter">Step 1</div>
                    <div class="step-detail">Cart</div>
                </div>
                <img src="/icons/chevron-right.svg" class="step-icon">
                <div class="step sec-1-fill disable-fill">
                    <div class="step-counter">Step 2</div>
                    <div class="step-detail">Shipping</div>
                </div>
                <img src="/icons/chevron-right.svg" class="step-icon">
                <div class="step sec-2-fill disable-fill">
                    <div class="step-counter">Step 3</div>
                    <div class="step-detail">Payment</div>
                </div>
            </div>
            <div class="container-product-summary">
                <table>
                    <tr class="container-product-title">
                        <th class="product-details-text">Product Details</th>
                        <th class="quantity-text">Quantity</th>
                        <th class="price-text">Price</th>
                        <th class="total-text">Total</th>
                        <th></th>
                    </tr>

                    @foreach ($cartItems as $item)
                    <tr class="products">
                        <td class="product-details">
                            {{-- <img src="data:image/png;base64,{{ $item->image }}" alt="Product Image"> --}}
                            <img src="{{ $item->Image }}" alt="">
                            {{-- <img src="\images\marker.png" alt=""> --}}
                            <div class="detail-cart">
                                {{-- <p>{{ $item->product->NameProduct }}</p> --}}
                                <p>{{$item->NameProduct}}</p>
                                <p class="var-cart"> var : {{ $item->VariantName }}</p>
                            </div>
                        </td>
                        <td class="product-quantity">
                            <form action="{{ route('cart.update', ['product_id' => $item->ProductID, 'variant_id' => $item->VariantID, 'user_id' => $item->UserID]) }}" method="POST" class="form-quantity">
                                @csrf
                                @method('PUT')
                                <img src="\icons\minus.svg" alt="" class="btn-quantity" data-action="minus">
                                <input type="hidden" name="quantity" value="{{ $item->Quantity }}" data-stock="{{ $item->Stock }}">
                                <p>{{ $item->Quantity }}</p>
                                <img src="\icons\plus.svg" alt="" class="btn-quantity" data-action="plus">  
                            </form>
                        </td>
                        <td class="product-price">
                            {{-- <p>Rp. {{ number_format($item->variant->entry->Price ?? 0, 0, ',', '.') }}</p> --}}
                            <p>Rp. {{ number_format($item->Price ?? 0, 0, ',', '.') }}</p>
                        </td>
                        <td class="product-total-price">
                            {{-- <p>Rp. {{ number_format($item->variant->entry->Price*$item->Quantity ?? 0, 0, ',', '.') }}</p> --}}
                            <p>Rp. {{ number_format($item->Price*$item->Quantity ?? 0, 0, ',', '.') }}</p>
                        </td>
                        {{-- <td class="product-checkbox">
                            <input type="checkbox" onclick="updateSummary(this)">
                        </td> --}}
                        <td class="product-checkbox">
                            <input type="checkbox" name="checkedProducts[]" data-id="{{ $item->ProductID }}" data-variant="{{ $item->VariantID }}" data-quantity="{{ $item->Quantity }}" onclick="updateSummary(this)">
                        </td>
                    </tr>   
                    @endforeach
                </table>

                <div class="container-summary" id="summaryContainer" style="display: none;">
                    <div class="container-summary-title">
                        <p>Summary</p>
                    </div>
                    <hr>
                    <div class="bawah">
                        <div class="container-summary-price" id="summaryItems">
                            <!-- Summary items will be added dynamically here -->
                            <div class="total-price" id="summaryTotal">
                                <p>Total</p>
                                <p>Rp. 0</p>
                            </div>
                        </div>
                        {{-- <div class="container-summary-checkout">
                            <p>Checkout</p>
                        </div> --}}
                        <div class="container-summary-checkout">
                            <button type="button" onclick="goToShippingPage()">Checkout</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</body>
</html>
