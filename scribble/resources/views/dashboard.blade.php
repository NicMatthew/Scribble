<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/dashboard.css">
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
                    <div class="discount-add">Add Discount</div>
                </div>
            </div>
            <div class="content-right">
            </div>
        </div>
    </div>
</body>
</html>
