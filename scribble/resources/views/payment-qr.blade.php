<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\css\cart.css">
    <link rel="stylesheet" href="\css\variable.css">
    <link rel="stylesheet" href="\css\payment-qr.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="container-header">
            <div class="back">
                <img src="/icons/prev.svg">
            </div>
            <div class="title">
                <p>Payment</p>
            </div>
        </div>
        <div class="container-divider">
                <div class="divider"></div>
            </div>

        <div class="container-cart">
            <div class="container-step">
                <div class="steps">
                    <div class="steps-title">
                        <p class="step1 unselected">Step 1</p>
                    </div>
                    <div class="steps-desc">
                        <p class="step1 unselected">Cart</p>
                    </div>
                </div>
                <img src="/icons/next-step.png" alt="">
                <div class="steps">
                    <div class="steps-title">
                        <p class="step2 unselected">Step 2</p>
                    </div>
                    <div class="steps-desc">
                        <p class="step2 unselected">Shipping</p>
                    </div>
                </div>
                <img src="/icons/next-step.png" alt="">
                <div class="steps">
                    <div class="steps-title">
                        <p class="step3 selected">Step 3</p>
                    </div>
                    <div class="steps-desc">
                        <p class="step3 selected">Payment</p>
                    </div>
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

                        </div>

                    </div>
                </div>
            </div>
    </div>
</body>
</html>