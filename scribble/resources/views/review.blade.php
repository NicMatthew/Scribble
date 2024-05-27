<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/variable.css" rel="stylesheet">
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <!-- <script src="https://kit.fontawesome.com/4d9121ebec.js" crossorigin="anonymous"></script> -->
    <link href="/css/review.css" rel="stylesheet">
    <link href="/css/header-standard.css" rel="stylesheet">
    <script src="/js/review.js" defer=""></script>
</head>
<body>
    <div class="big-container">
        <div class="header">
            <div class="back-btn" onclick="history.back()">
                <img src="/icons/prev.svg">
            </div>
            <div class="header-title">Review</div>
            <hr class="divider">
        </div>
    </div>
    <div class="product-review">
        <div class="detail-product">
            <img src="/images/img1.svg" alt="">
            <div class="product-review-detail">
                <p class="title-product">Zebra Highlighter FM-1 Mild</p>
                <p class="variant">Variant : yellow</p>
                <p class="price">Rp. 12,500,00</p>
            </div>
        </div>
        <div class="review-container">
            <form id="review-form" action="/submit-review" method="POST" enctype="multipart/form-data">
                <div class="left-column">
                    <div class="additional-class"></div>
                    <textarea name="review" class="review-text" placeholder="Write your review here"></textarea>
                </div>
                <div class="right-column">
                    <div class="rating-section">
                        <p style="font-family: Helvetica">Rating :</p>
                        <div class="stars">
                            <img src="/icons/star-empty.svg" alt="">
                            <img src="/icons/star-empty.svg" alt="">
                            <img src="/icons/star-empty.svg" alt="">
                            <img src="/icons/star-empty.svg" alt="">
                            <img src="/icons/star-empty.svg" alt="">
                        </div>
                    </div>
                    <div class="photo-upload">
                        <input type="file" id="upload-photo" name="photo" class="upload-input">
                        <label for="upload-photo" class="upload-label">
                            <p>Add Photo</p>
                            <span class="icon"><img src="/icons/photo-review.svg" alt="Photo Icon"></span>
                        </label>
                        <div class="preview-container">
                            <img id="remove-photo" src="/icons/exit-address.svg" class="remove-icon"></img>
                            <img id="photo-preview" src="#" alt="Photo Preview">
                        </div>
                    </div>
                </div>
            </form>
            <div class="submit-button">
                 <a href="" class="btn-send">
                    <img src="/icons/send.svg" alt="">
                    <p>Send</p>
                </a>
            </div>
        </div>
    </div>

</body>
</html>
