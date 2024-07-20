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
    <div >
        <form action="{{ route('transaction-review-add') }}" name="form-submit" enctype="multipart/form-data">
        @foreach ($transaction->details as $index => $products)
            <input type="hidden" name="ProductID[]" value="{{ $products->ProductID }}">
            <input type="hidden" name="VariantID[]" value="{{ $products->VariantID }}">
            <div class="product-review">
                <div class="detail-product">
                    <img src="{{ $products->Image }}" alt="">
                    <div class="product-review-detail">
                        <p class="title-product">{{ $products->NameProduct }}</p>
                        @if ($products->VariantName != 'None')
                            <p class="variant">Variant : {{ $products->VariantName }}</p>
                        @endif
                        <p class="price">Rp. {{ $products->Price }}</p>
                    </div>
                </div>
                <div class="review-container">
                    <div class="left-column">
                        <div class="additional-class"></div>
                        <textarea name="TextReview[]" class="review-text" placeholder="Write your review here"></textarea>
                    </div>
                    <div class="right-column">
                        <div class="rating-section">
                            <p style="font-family: Helvetica">Rating :</p>
                            <input type="hidden" name="Rating[]" class="Rating-input">
                            <div class="stars">
                                <img src="/icons/star-empty.svg" alt="">
                                <img src="/icons/star-empty.svg" alt="">
                                <img src="/icons/star-empty.svg" alt="">
                                <img src="/icons/star-empty.svg" alt="">
                                <img src="/icons/star-empty.svg" alt="">
                            </div>
                        </div>
                        <div class="photo-upload">
                            <input type="file" id="upload-photo-{{ $index }}" name="Image[]" class="upload-input Image-input" accept="image/*">
                            <label for="upload-photo-{{ $index }}" class="upload-label">
                                <p>Add Photo</p>
                                <span class="icon"><img src="/icons/photo-review.svg" alt="Photo Icon"></span>
                            </label>
                            <div class="preview-container">
                                <img id="remove-photo-{{ $index }}" src="/icons/exit-address.svg" class="remove-icon"></img>
                                <img id="photo-preview-{{ $index }}" src="#" alt="Photo Preview">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </form>
        <div class="submit-button" id="submit-button">
            <a class="btn-send">
                <img src="/icons/send.svg" alt="">
                <p>Send</p>
            </a>
        </div>
    </div>
    

</body>
</html>
