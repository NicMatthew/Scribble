<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/header-standard.css">
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
                            <div class="value">Rp. 120.322.000</div>
                            <div class="description">Total Sales</div>
                        </div>
                        <div class="overview">
                            <div class="value">300</div>
                            <div class="description">Registered Users</div>
                        </div>
                    </div>
                </div>
                <div class="content-discount">
                    <div class="content-title">Discount</div>
                    <div class="discount-wrapper">
                        <div class="discount">
                            @include("components/voucher")
                            <div class="discount-remove">
                                <img src="/icons/trash-bin-white.svg" class="remove-icon">
                            </div>
                        </div>
                        <div class="discount">
                            @include("components/voucher")
                            <div class="discount-remove">
                                <img src="/icons/trash-bin-white.svg" class="remove-icon">
                            </div>
                        </div>
                        <div class="discount">
                            @include("components/voucher")
                            <div class="discount-remove">
                                <img src="/icons/trash-bin-white.svg" class="remove-icon">
                            </div>
                        </div>
                        <div class="discount">
                            @include("components/voucher")
                            <div class="discount-remove">
                                <img src="/icons/trash-bin-white.svg" class="remove-icon">
                            </div>
                        </div>
                        <div class="discount">
                            @include("components/voucher")
                            <div class="discount-remove">
                                <img src="/icons/trash-bin-white.svg" class="remove-icon">
                            </div>
                        </div>
                    </div>
                    <div class="discount-add" id="discount-add">Add Discount</div>
                </div>
            </div>
            <div class="content-right">
                <div class="top-sales-container">
                    <div class="content-title">Top Sales</div>
                    <div class="sales-header">
                        <div class="sub-header">Product</div>
                        <div class="sub-header">Earnings</div>
                    </div>
                    <div class="top-sales-wrapper">
                        <div class="sales">
                            <div class="sales-product">
                                <img src="/images/pict1.jpg" class="sales-img">
                                <div class="sales-title">Pencil</div>
                            </div>
                            <div class="total-earn">Rp. 100.000</div>
                        </div>
                        <div class="sales">
                            <div class="sales-product">
                                <img src="/images/pict1.jpg" class="sales-img">
                                <div class="sales-title">Pencil</div>
                            </div>
                            <div class="total-earn">Rp. 100.000</div>
                        </div>
                        <div class="sales">
                            <div class="sales-product">
                                <img src="/images/pict1.jpg" class="sales-img">
                                <div class="sales-title">Pencil</div>
                            </div>
                            <div class="total-earn">Rp. 100.000</div>
                        </div>
                        <div class="sales">
                            <div class="sales-product">
                                <img src="/images/pict1.jpg" class="sales-img">
                                <div class="sales-title">Pencil</div>
                            </div>
                            <div class="total-earn">Rp. 100.000</div>
                        </div>
                        <div class="sales">
                            <div class="sales-product">
                                <img src="/images/pict1.jpg" class="sales-img">
                                <div class="sales-title">Pencil</div>
                            </div>
                            <div class="total-earn">Rp. 100.000</div>
                        </div>
                        <div class="sales">
                            <div class="sales-product">
                                <img src="/images/pict1.jpg" class="sales-img">
                                <div class="sales-title">Pencil</div>
                            </div>
                            <div class="total-earn">Rp. 100.000</div>
                        </div>
                        <div class="sales">
                            <div class="sales-product">
                                <img src="/images/pict1.jpg" class="sales-img">
                                <div class="sales-title">Pencil</div>
                            </div>
                            <div class="total-earn">Rp. 100.000</div>
                        </div>
                        <div class="sales">
                            <div class="sales-product">
                                <img src="/images/pict1.jpg" class="sales-img">
                                <div class="sales-title">Pencil</div>
                            </div>
                            <div class="total-earn">Rp. 100.000</div>
                        </div>
                        <div class="sales">
                            <div class="sales-product">
                                <img src="/images/pict1.jpg" class="sales-img">
                                <div class="sales-title">Pencil</div>
                            </div>
                            <div class="total-earn">Rp. 100.000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-container">
            <div class="content-title">Banner</div>
            <div class="banner-wrapper">
                <div class="banner">
                    <img src="/images/group.jpg" class="banner-img">
                    <div class="banner-remove">
                        <img src="/icons/trash-bin-white.svg" class="remove-icon">
                    </div>
                </div>
                <div class="banner">
                    <img src="/images/group.jpg" class="banner-img">
                    <div class="banner-remove">
                        <img src="/icons/trash-bin-white.svg" class="remove-icon">
                    </div>
                </div>
                <div class="banner">
                    <img src="/images/group.jpg" class="banner-img">
                    <div class="banner-remove">
                        <img src="/icons/trash-bin-white.svg" class="remove-icon">
                    </div>
                </div>
                <div class="banner">
                    <img src="/images/group.jpg" class="banner-img">
                    <div class="banner-remove">
                        <img src="/icons/trash-bin-white.svg" class="remove-icon">
                    </div>
                </div>
                <div class="banner">
                    <img src="/images/group.jpg" class="banner-img">
                    <div class="banner-remove">
                        <img src="/icons/trash-bin-white.svg" class="remove-icon">
                    </div>
                </div>
                <div class="banner">
                    <img src="/images/group.jpg" class="banner-img">
                    <div class="banner-remove">
                        <img src="/icons/trash-bin-white.svg" class="remove-icon">
                    </div>
                </div>
                <div class="banner">
                    <img src="/images/group.jpg" class="banner-img">
                    <div class="banner-remove">
                        <img src="/icons/trash-bin-white.svg" class="remove-icon">
                    </div>
                </div>
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
        <div class="add-discount-container" id="add-discount-container">
            <div class="header">
                <div class="close-btn" id="close-btn-disc">
                    <img src="/icons/close.svg">
                </div>
                <div class="header-title">Add Discount</div>
                <hr class="divider">
            </div>
            <form class="add-discount-wrapper">
                <div class="input-wrapper">
                    <div class="input-name">Discount name</div>
                    <input type="text" class="input-field" placeholder="Discount name">
                </div>
                <div class="input-wrapper">
                    <div class="input-name">Start date</div>
                    <input type="date" class="input-field">
                </div>
                <div class="input-wrapper">
                    <div class="input-name">End date</div>
                    <input type="date" class="input-field">
                </div>
                <div class="input-wrapper">
                    <div class="input-name">Discount value</div>
                    <input type="text" class="input-field" placeholder="IDR/%">
                </div>
                <div class="input-wrapper">
                    <div class="input-name">Discount type</div>
                    <input type="text" class="input-field" placeholder="Shipment / Total Payment">
                </div>
                <div class="input-wrapper">
                    <div class="input-name">Discount category product</div>
                    <input type="text" class="input-field" placeholder="Category product">
                </div>
                <div class="add-new-disc">Add Discount</div>
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
                <form name="" method="POST" class="banner-form">
                    <div class="banner-import">Import Image</div>
                    <input type="file" accept="image/*" name="bannerImage" class="banner-image" id="banner-image">
                </form>
                <div class="banner-preview" id="banner-preview">
                    <img src="#" class="img-preview" id="img-preview">
                    <img src="/icons/exit-address.svg" class="close-preview" id="close-preview">
                    <div class="submit-banner">Add Banner</div>
                </div>
            </div>
        </div>
    </div>
    <form name="" method="POST" class="hide">
        <input type="text" name="">
    </form>
</body>
</html>
