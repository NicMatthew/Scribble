<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/variable.css" rel="stylesheet">
    <link href="/css/product-detail.css" rel="stylesheet">
    <script src="/js/product-detail.js"></script>
</head>
<body>
    @include('components/navbar')
    <div class="big-container">
        <div class="back-button">
            <img src="/icons/prev.svg" alt="">
        </div>
        <div class="right">
            <div class="product">
                <div class="left-photo">
                        <div class="main">

                        </div>
                        <div class="photo-detail">
                            <div class="ph-1">

                            </div>
                            <div class="ph-2">

                            </div>
                            <div class="ph-3">

                            </div>
                        </div>
                </div>
                <div class="right-detail">
                    <div class="title-product mb-0">
                        <p class="mb-0">Zebra Highlighter FM-1 Mild</p>
                    </div>
                    <div class="rating-sell mb-1" style="display: flex; align-items:center">
                        <div class="rating mb-0">
                            <img src="/icons/star.svg">
                            <img src="/icons/star.svg">
                            <img src="/icons/star.svg">
                            <img src="/icons/star.svg">
                            <img src="/icons/star.svg">
                        </div>
                        <div class="review-sold" style="display: flex; align-items:center">
                            <p class="mb-0 b3">(50 reviews) | 100 Terjual</p>
                        </div> 
                    </div>
                    <div class="price-product mb-1 b2">
                        <p class="mb-0">Rp. 12.500,00</p>
                    </div>
                    <div class="variant mb-2">
                        <p class="mb-0 mr-2 b3" style="width: 15%; color: rgba(117,117,117,0.75);">Variant : </p>
                        <div class="var-opt">
                            <a href="" class="btn-var mr-3" style="font-family:helvetica; text-decoration: none; padding: 12px 20px; border-radius: 15px; display:flex; flex-direction: row; align-items:center;">
                                <p class="mb-0" style="color:var(--dark-grey)">Pink</p>
                            </a>
                            <a href="" class="btn-var mr-3" style="font-family:helvetica; text-decoration: none; padding: 12px 20px; border-radius: 15px; display:flex; flex-direction: row; align-items:center;">
                                <p class="mb-0" style="color:var(--dark-grey)">Blue</p>
                            </a>
                            <a href="" class="btn-var mr-3" style="font-family:helvetica; text-decoration: none; padding: 12px 20px; border-radius: 15px; display:flex; flex-direction: row; align-items:center;">
                                <p class="mb-0" style="color:var(--dark-grey)">Green</p>
                            </a>
                            <a href="" class="btn-var mr-3" style="font-family:helvetica; text-decoration: none; padding: 12px 20px; border-radius: 15px; display:flex; flex-direction: row; align-items:center;">
                                <p class="mb-0" style="color:var(--dark-grey)">Green</p>
                            </a>
                            <a href="" class="btn-var mr-3" style="font-family:helvetica; text-decoration: none; padding: 12px 20px; border-radius: 15px; display:flex; flex-direction: row; align-items:center;">
                                <p class="mb-0" style="color:var(--dark-grey)">Green</p>
                            </a>
                        </div>
                    </div>
                    <div class="quantity mb-1">
                        <div class="plus-minus" style="display:flex; align-items: center;">
                            <img src="/icons/minus-icon.svg" style="width: 22px; height: 22px">
                            <p class="mb-0 ml-2 mr-2">1</p>
                            <img src="/icons/plus-icon.svg" style="width: 22px; height: 22px" alt="">
                        </div>
                        <p class="mb-0 ml-3 b3" style="color: rgba(117,117,117,0.75);">19 pieces available</p>
                    </div>
                    <div class="check-out">
                        <a href="" class="btn mr-2" style="text-decoration: none; padding: 20px 25px; border-radius: 15px; display:flex; flex-direction: row; align-items:center;">
                            <img src="/icons/cart-product-detail.svg" alt="">
                            <p class="mb-0 ml-2 b3" style="font-weight: bold; color:white">Add to Cart</p>
                        </a>
                        <a href="" class="btn-2 mr-3" style="text-decoration: none; padding: 20px 25px; border-radius: 15px; display:flex; flex-direction: row; align-items:center;">
                            <p class="mb-0 b3" style="font-weight: bold; color:white">Buy Now</p>
                        </a>
                        <div class="wish">
                            <img src="/icons/love-outline.svg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="description">
                <p class="title-desc mb-1">Product Description</p>
                <p class="product-desc mb-0">Pensil warna klasik yang dibuat dengan teknologi Jerman ini hadir dengan fitur warna yang cerah, non toxic hingga aman untuk anak-anak, tidak mudah patah, serta ramah lingkungan. Setiap pensil memberikan pengalaman seni yang kreatif dan menyenangkan dengan palet warna yang hidup dan menarik. Dengan kualitas yang tahan lama dan bahan yang ramah lingkungan, produk ini menjadi pilihan sempurna bagi anak-anak yang ingin menggali bakat seni mereka sekaligus menjunjung nilai-nilai keberlanjutan. Tersedia dalam kemasan 12, 24, 36 dan 48 warna. </p>
            </div>

            <div class="rating-review">
                <p class="title-rating-review mb-1">Product Ratings</p>
                <div class="container-rate">
                    <div class="rate-product">
                        <img src="/icons/star.svg" alt="">
                        <div class="rate">
                            <div class="rating-numb">
                                <p class="main-rate h1 mb-0">4.7</p>
                                <p class="standard b3 mb-0">/5</p>
                            </div>
                            <p class="many-users b3 mt-0 mb-0">Based on 100 reviews</p>
                        </div>
                    </div>
                    <div class="rate-filter">
                        <div class="dropdown-sort" style="background-color: teal;">
                            <div class="sort-btn">
                                <div class="left-part">
                                    <img src="/icons/sort.svg" alt="sort">
                                    <a class="b3">Sort By</p>
                                </div>
                                <div class="right-part">
                                    <img src="/icons/chevron-down.svg" alt="down">
                                </div>
                                <ul class="dropdown-sort-content">
                                    <li class="b3"><a href="#">Top Sales</a></li>
                                    <li class="b3"><a  href="#">Lowest Price</a></li>
                                    <li class="b3"><a href="#">Highest Price</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    @include('components/footer')
</body>
</html>