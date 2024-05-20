<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/variable.css" rel="stylesheet">
    <link href="/css/product-detail.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="/js/product-detail.js" defer=""></script>
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

                    <div class="wrapper">
                        <i id="left" class="fa-solid fa-angle-left"></i>
                        <div class="carousel">
                            <img src="/images/img1.svg" alt="img">
                            <img src="/images/img2.svg" alt="img">
                            <img src="/images/img3.svg" alt="img">
                            <img src="/images/img4.svg" alt="img">
                            <img src="/images/img5.svg" alt="img">
                            <img src="/images/img2.svg" alt="img">
                            <img src="/images/img3.svg" alt="img">
                            <img src="/images/img2.svg" alt="img">
                            <img src="/images/img3.svg" alt="img">
                        </div>
                        <i id="right" class="fa-solid fa-angle-right"></i>
                    </div>
                </div>

                <div class="right-detail">
                    <div class="title-product mb-0">
                        <p class="mb-0">Zebra Highlighter FM-1 Mild</p>
                    </div>
                    <div class="rating-sell mb-1 mt-0" style="display: flex; align-items:center">
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
                            <img src="/icons/minus.svg" style="width: 22px; height: 22px">
                            <p class="mb-0 ml-2 mr-2">1</p>
                            <img src="/icons/plus.svg" style="width: 22px; height: 22px" alt="">
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
                        <div class="wishlist">
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
                    

                    <!-- <div class="rate-filter">
                        <div class="dropdown-sort">
                            <div class="sort-btn" style="display: flex; align-items:center; flex-direction:row">
                                <div class="left-part">
                                    <img src="/icons/sort.svg" alt="sort">
                                    <p class="mb-0 b3" style="display: flex; align-items:center">Sort By</p>
                                </div>
                                <div class="right-part">
                                    <img src="/icons/chevron-down.svg" alt="down">
                                </div>
                                <ul class="dropdown-sort-content">
                                    <li class="b3"><a href="#" style="text-decoration:none">Top Sales</a></li>
                                    <li class="b3"><a  href="#" style="text-decoration:none">Lowest Price</a></li>
                                    <li class="b3"><a href="#" style="text-decoration:none">Highest Price</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

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
                <li class="card">
                    @include('components/product-card')
                </li>
                <li class="card">
                    @include('components/product-card')
                </li>
                <li class="card">
                    @include('components/product-card')
                </li>
                <li class="card">
                    @include('components/product-card')
                </li>
                <li class="card">
                    @include('components/product-card')
                </li>
                <li class="card">
                    @include('components/product-card')
                </li>
                <li class="card">
                    @include('components/product-card')
                </li>
            </ul>
            <i id ="right-2" class="fa-solid fa-angle-right"></i>
        </div>
    </div>

    <!-- <div class="product-suggest">
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
    </div> -->


    @include('components/footer')
</body>
</html>