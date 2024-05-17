<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\css\variable.css">
    <link rel="stylesheet" href="\css\payment-qr.css">
    <link rel="stylesheet" href="\css\header-standard.css">
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
                    <img  src="/images/payment-qr.svg" alt="">
                </div>
                <div class="container-payment-info">
                    <div class="container-total-payment">
                        <p>Total</p>
                        <p>Rp. 100.000</p>
                    </div>
                    <div class="container-payment-otp">
                        <div class="input-otp">
                            <input type="text" placeholder="Input OTP Code">
                        </div>
                        <div class="submit-button">
                            <img src="/icons/next.svg" alt="">

                        </div>

                    </div>
                </div>
            </div>
    </div>
</body>
</html>
