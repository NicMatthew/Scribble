<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="\css\variable.css">
    <link rel="stylesheet" href="\css\payment-qr.css">
    <link rel="stylesheet" href="\css\header-standard.css">
    <script src="\js\payment-qr.js" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="back-btn" onclick="history.back()">
                <img src="/icons/prev.svg">
            </div>
            <div class="header-title">Payment</div>
            <hr class="divider">
        </div>
        <div class="container-cart">
            <div class="steps-info">
                <div class="step prim-1-fill passive">
                    <div class="step-counter">Step 1</div>
                    <div class="step-detail">Cart</div>
                </div>
                <img src="/icons/chevron-right.svg" class="step-icon">
                <div class="step sec-1-fill passive">
                    <div class="step-counter">Step 2</div>
                    <div class="step-detail">Shipping</div>
                </div>
                <img src="/icons/chevron-right.svg" class="step-icon">
                <div class="step sec-2-fill">
                    <div class="step-counter">Step 3</div>
                    <div class="step-detail">Payment</div>
                </div>
            </div>
            <div class="container-payment-qr">
                <div class="payment-qr-img">
                    <img  src="/images/payment-qr.svg" alt="" id="qr">
                </div>
                <div class="container-payment-info">
                    <div class="container-total-payment">
                        <p>Total</p>
                        <p>Rp. {{ number_format($totalPrice, 0, ',', '.') }}</p>
                    </div>
                    <div class="container-payment-otp">
                        <form class="input-otp" method="POST" action="{{ route("paymentSuccess") }}" name="otp-form">
                            @csrf
                            <input type="hidden" name="transactionID" value="{{ $transactionID }}">
                            <input type="text" placeholder="Input OTP Code" id="input-otp">
                        </form>
                        <div class="submit-button" id="submit-button">
                            <img src="/icons/next.svg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="overlay">
            <div class="payment-success">
            </div>
        </div>
</body>
</html>
