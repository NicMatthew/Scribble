<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shipping</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/shipping.css">
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/header-standard.css">
    <link rel="stylesheet" href="/css/steps-info.css">
    <link rel="stylesheet" href="/css/voucher.css">
    <script src="/js/shipping.js" defer=""></script>
</head>
<body>
    @php
        $totalPrice = 0;
    @endphp
    <div class="header">
        <div class="back-btn" onclick="history.back()">
            <img src="/icons/prev.svg">
        </div>
        <div class="header-title">Shipping</div>
        <hr class="divider">
    </div>
    {{-- @php
        $selectedAddressName = isset($_COOKIE['selectedAddressName']) ? $_COOKIE['selectedAddressName'] : null;
        $selectedFullAddress = isset($_COOKIE['selectedFullAddress']) ? $_COOKIE['selectedFullAddress'] : null;
    @endphp --}}
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
                    @if ($address != null)
                        <div class="address-name">{{ $address->AddressName }}</div>
                        <div class="address-full">{{ $address->FullAddress }}</div>
                    @else
                        <div class="address-name">No address selected</div>
                    @endif
                </div>
            </div>
            <a href="/addresses/{{auth()->id()}}" class="address-select" id="address-select">Select</a>
        </div>
        <div class="product-payment-container">
            <div class="product-container">
                <div class="product-header">Products</div>
                <div class="product-wrapper">
                    @foreach($selectedProducts as $product)
                        @include("components/product-payment")
                        @php
                            $totalPrice += $product['productPrice'] * $product['quantity'];
                        @endphp
                    @endforeach

                </div>
            </div>
            <div class="payment-container">
                <div class="payment-wrapper">
                    <div class="payment-header">Payment Details</div>
                    <div class="payment-list">
                        <div class="list">
                            <div class="payment-name">Subtotal produk</div>
                            <div class="payment-price" id="subtotalPrice">Rp. {{ number_format($totalPrice, 0, ',', '.') }}</div>
                        </div>
                        <div class="list">
                            <div class="payment-name">Biaya pengiriman</div>
                            <div class="payment-price">Rp. 5.000</div>
                        </div>
                        <div class="list">
                            <div class="payment-name">Discount</div>
                            <div class="payment-price" id="discountPrice">Rp. 0</div>
                        </div>
                        <div class="list">
                            <div class="payment-name final">Total payment</div>
                            <div class="payment-price final" id="totalPrice">Rp. 105.000</div>
                        </div>
                    </div>
                </div>
                <div class="voucher-wrapper">
                    <div class="voucher-header">
                        <img src="/icons/voucher.svg">
                        <div class="voucher-title" id="voucher-title">Voucher</div>
                    </div>
                    <div class="voucher-btn" id="voucher-btn">Select</div>
                </div>
                <div class="pay-btn" id="pay-btn">Pay Now</div>
            </div>
        </div>
    </div>
    <div class="modal" id="modal">
        <div class="select-voucher" id="voucherList">
            <div class="header">
                <div class="close-btn" id="close-btn">
                    <img src="/icons/close.svg">
                </div>
                <div class="header-title">Discount</div>
                <hr class="divider">
            </div>
            <div class="voucher-list" id="voucher-list">
                <h3 class="voucher-category-title">Discount Shipping</h3>
                @if (count($voucherShipment) == 0)
                    <h3 class="voucher-alert b1">No Discount Shipping Available</h3>
                    <div class="voucher-category" id="voucherShipment">

                    </div>
                @else
                    <div class="voucher-category" id="voucherShipment">
                        @foreach ($voucherShipment as $voucher)
                            @include("components/voucher")
                        @endforeach
                    </div>
                @endif
                <h3 class="voucher-category-title">Discount Product</h3>
                @if (count($voucherProduct) == 0)
                    <h3 class="voucher-alert b1">No Discount Product Available</h3>
                    <div class="voucher-category" id="voucherProduct">

                    </div>
                @else
                <div class="voucher-category" id="voucherProduct">
                    @foreach ($voucherProduct as $voucher)
                        @include("components/voucher")
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <div class="message-container" id="message-container">
            <img src="/icons/reminder-delete.svg">
            <div class="alert-message">Address is empty!</div>
            <div class="btn-container">
                <div class="cancel-btn" id="cancel-btn">OK</div>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route("make-order") }}" name="shipping-form">
        @csrf
        @foreach ($selectedProducts as $product)
            <input type="hidden" name="productIDs[]" value="{{ $product["productID"] }}">
            <input type="hidden" name="variantIDs[]" value="{{ $product["variantID"] }}">
            <input type="hidden" name="quantity[]" value="{{ $product["quantity"] }}">
        @endforeach
        <input type="hidden" name="voucherShipmentID" value="" id="voucherShipmentID">
        <input type="hidden" name="voucherProductID" value="" id="voucherProductID">
        <input type="hidden" name="totalPrice" value="" id="totalPriceInput">
        <input type="hidden" name="addressID" value="@if($address != null) $address->AddressID @endif" id="addressID">
    </form>
</body>
</html>
