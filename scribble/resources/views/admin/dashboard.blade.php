<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/header-standard.css">
    <link rel="stylesheet" href="/css/voucher.css">
    <script src="/js/dashboard.js" defer=""></script>
</head>
<body>
    @include("components/sidebar-admin")
    <div class="main-content">
        <div class="content-header">
            <div class="header-title">Dashboard</div>
            <hr class="content-line">
        </div>
        <div class="content-wrapper">
            <div class="content-left">
                <div class="content-overview">
                    <div class="content-title">Overview</div>
                    <div class="overview-wrapper">
                        <div class="overview">
                            <div class="value">Rp. {{ number_format($totalSales, 0, ",", ".") }}</div>
                            <div class="description">Total Sales</div>
                        </div>
                        <div class="overview">
                            <div class="value">{{ $userCount }}</div>
                            <div class="description">Registered Users</div>
                        </div>
                    </div>
                </div>
                <div class="content-discount">
                    <div class="content-title">Discount</div>
                    <div class="discount-wrapper">
                        @foreach ($voucherProduct as $voucher)
                            @include("components/voucher")
                        @endforeach
                        @foreach ($voucherShipment as $voucher)
                            @include("components/voucher")
                        @endforeach
                    </div>
                    <div class="discount-add" id="discount-add">Add Discount</div>
                </div>
            </div>
            <div class="content-right">
                <div class="top-sales-container">
                    <div class="content-title">Top Sales</div>
                    <div class="sales-header">
                        <div class="sub-header">Product</div>
                        <div class="sub-header">Sales Quantity</div>
                    </div>
                    <div class="top-sales-wrapper">
                        @foreach ($sales as $sale)
                            <div class="sales">
                                <div class="sales-product">
                                    <img src="{{ $sale->Image }}" class="sales-img">
                                    <div class="sales-title">{{ $sale->NameProduct }}</div>
                                </div>
                                <div class="total-earn">{{ $sale->SalesQuantity }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-container">
            <div class="content-title">Banner</div>
            <div class="banner-wrapper">
                @foreach ($banners as $banner)
                    <div class="banner">
                        <img src="{{ $banner->image }}" class="banner-img">
                        <div class="banner-remove">
                            <a href="{{ route("admin-remove-banner", $banner->id) }}" onclick="return false"><img src="/icons/trash-bin-white.svg" class="remove-icon"></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="discount-add" id="banner-add">Add Banner</div>
        </div>
    </div>
    <div class="modal" id="modal">
        <div class="message-container" id="message-container">
            <img src="/icons/reminder-delete.svg">
            <div class="alert-message">Are you sure you want to remove this item?</div>
            <div class="alert-hint">This action cannot be undone</div>
            <div class="btn-container">
                <div class="cancel-btn" id="cancel-btn">Cancel</div>
                <div class="rem-btn" id="rem-btn">Remove</div>
            </div>
        </div>
<!-- ADD DISCOUNT -->

        <div class="add-discount-container" id="add-discount-container">
            <div class="header">
                <div class="close-btn" id="close-btn-disc">
                    <img src="/icons/close.svg">
                </div>
                <div class="header-title">Add Discount</div>
                <hr class="divider">
            </div>
            <form name="disc-form" class="add-discount-wrapper" action="{{ route("add-discount") }}" method="GET">
                <div class="input-wrapper">
                    <div class="input-name">Discount name</div>
                    <input type="text" class="input-field" placeholder="Discount name" name="DiscountName">
                </div>
                <div class="input-wrapper">
                    <div class="input-name">Start date</div>
                    <input type="date" class="input-field" name="StartDate">
                </div>
                <div class="input-wrapper">
                    <div class="input-name">End date</div>
                    <input type="date" class="input-field" name="EndDate">
                </div>
                <div class="input-wrapper">
                    <div class="input-name">Discount value</div>
                    <input type="text" class="input-field" placeholder="IDR / 0.x (percentage)" name="DiscountValue">
                </div>
                <div class="input-wrapper">
                    <div class="input-name">Discount type</div>
                    <select class="input-field" name="DiscountType" id="ChooseType">
                        <option value="" disabled selected>Choose Shipment / Total Payment</option>
                        <option value="Shipment">Shipment</option>
                        <option value="Total Payment">Total Payment</option>
                    </select>
                </div>
                <div class="input-wrapper" id="CategoryProductVoucher">
                    <div class="input-name">Discount category product</div>
                    <select class="input-field" name="DiscountCategory">
                        <option value="" disabled selected>Choose Category Product</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->CategoryProductID}}">{{$category->NameCategory}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="add-new-disc" id="add-new-disc">Add Discount</div>
            </form>
        </div>




        <div class="add-banner-container" id="add-banner-container">
            <div class="header">
                <div class="close-btn" id="close-btn-banner">
                    <img src="/icons/close.svg">
                </div>
                <div class="header-title">Add Banner</div>
                <hr class="divider">
            </div>
            <div class="banner-wrapper">
                <form name="banner-form" action="{{ route("admin-store-banner") }}" method="POST" class="banner-form" enctype="multipart/form-data">
                    @csrf
                    <div class="banner-import">Import Image</div>
                    <input type="file" accept="image/*" name="bannerImage" class="banner-image" id="banner-image">
                </form>
                <div class="banner-preview" id="banner-preview">
                    <img src="#" class="img-preview" id="img-preview">
                    <img src="/icons/exit-address.svg" class="close-preview" id="close-preview">
                    <div class="submit-banner" id="submit-banner">Add Banner</div>
                </div>
            </div>
        </div>
    </div>
    <form name="delete-voucher" method="GET" class="hide" action="{{ route('delete-discount') }}">
        <input type="hidden" name="VoucherProductID" id="VoucherProductID">
        <input type="hidden" name="VoucherShipmentID" id="VoucherShipmentID">
    </form>
</body>
</html>
