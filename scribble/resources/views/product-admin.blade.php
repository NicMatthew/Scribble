<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin's Page | Product </title>
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/product-admin.css">
</head>
<body>
    @include("components/sidebar-admin")
    <div class="main-content">
        <div class="content-header">
            <div class="the-title">
                <div class="header-title">Products Management</div>
                <a href="#" class="new-prod-btn">
                    <img src="\images\only-plus.png" alt="Plus">
                    <p class="new-prod-txt">New Product</p>
                </a>
            </div>
            <hr class="content-line">
            <p class="all-prods">All Products</p>
        </div>

        <div class="bottom-content">
            <p class="total">Total Products: 1</p>
            <div class="table">
                <div class="table-title">
                    <p class="title-num">No</p>
                    <p class="title-id">Product ID</p>
                    <p class="title-name">Name</p>
                    <p class="title-cat">Category</p>
                    <p class="title-var">Variant</p>
                    <p class="title-stock">Stock</p>
                    <p class="title-price">Price</p>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>