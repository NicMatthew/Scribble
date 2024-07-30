<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction List | Scribble</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/transaction-list.css">
    <script src="/js/transaction-list.js" defer></script>
    {{-- unpaid ,packaged, in delivery, finished, canceled --}}
</head>
<body>
    <div class="navbar">
        @include('components/navbar-logo')
    </div>
    <div class="content">
        <div class="left-side">
            @include('components/sidebar')
        </div>
        <div class="right-side">
            <div class="title">
                <p class="h2">Transaction List</p>
            </div>
            <div class="content-right-side">
                @foreach ($transactions as $transaction)
                    <div class="order">
                        <div class="content-header">
                            <div class="content-header-left">
                                <img src="/icons/shopping-bag.svg" alt="">
                                <p class="b1">{{  $transaction->TransactionDate }}</p>
                            </div>
                            <div class="content-header-right">
                                <p class="b1 order-id">Transaction ID: {{  $transaction->TransactionID }}</p>
                                <p class="b1 status {{ $transaction->statusColor }}">{{  $transaction->TransactionStatus }}</p>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="grand-total">
                                <p class="b2">Grand Total: <span class="b1 total">Rp {{ number_format($transaction->TotalPrice, 0, ',', '.')  }}</span></p>
                            </div>
                            <div class="all-items">
                                @foreach ($transaction->details as $details)
                                    <div class="item">
                                        <div class="item-set">
                                            <div class="left-side-item">
                                                <img src="{{ $details->Image }}" alt="">
                                            </div>
                                            <div class="middle-side-item">
                                                <div class="item-name">
                                                    <p class="b1 name-item">{{ $details->NameProduct }}</p>
                                                </div>
                                                <div class="item-desc">
                                                    <div class="total-price">
                                                        <p class="b2 total-price-text">Total Price:  <span class="b1 price-text">Rp {{ number_format($details->Price*$details->Quantity , 0, ',', '.')}}</span></p>
                                                    </div>
                                                    <div class="qty">
                                                        <p class="b2 qty-text">Quantity: {{ $details->Quantity }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($transaction->TransactionStatus != "Canceled")
                                            <div class="right-side-item">
                                                <a href="/product-catalog/{{ $details->ProductID }}" class="buy-again-btn">
                                                    <img src="/icons/trolley.svg" alt="tes">
                                                    <p class="b2 buy-again-text">Buy Again</p>
                                                </a>
                                            </div>
                                        @else
                                            <div class="right-side-item">

                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <div class="transaction-actions">
                                @if ($transaction->TransactionStatus == "Unpaid")
                                    <div class="pay-now">
                                        <a href="{{ route('retry-payment', $transaction->TransactionID) }}" class="pay-now-btn">
                                            <img src="/icons/paynow.png" alt="Pay Now">
                                            <p class="b2 pay-now-text">Pay Now</p>
                                        </a>
                                    </div>
                                @endif
                                @if ($transaction->TransactionStatus != "Cancelled" && $transaction->TransactionStatus != "Finished" && $transaction->TransactionStatus != "In Delivery")
                                <div class="cancellation">
                                    <a href="#" class="cancel-btn" id="cancel-btn" value = {{ $transaction->TransactionID }}>
                                        <img src="/icons/cancel-order.svg" alt="tes">
                                        <p class="b2 cancel-text" >Cancel</p>
                                    </a>
                                </div>
                                @endif
                            </div>
                            @if ($transaction->TransactionStatus == "Finished" && $transaction->ReviewStatus == 'none')
                                <div class="review">
                                    <a href="#" class="review-btn" id="review-btn" value = {{ $transaction->TransactionID }}>
                                        <img src="/icons/review-white.svg" alt="tes">
                                        <p class="b2 review-text" >Review</p>
                                    </a>

                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="modal-delete hidden" id="modal-delete">
        <div class="overlay-2">
            <div class="form-delete">
                <img src="/icons/reminder-delete.svg" class="exclaimation-mark" alt="">
                <p class="confirm b1">Are you sure you want to cancel your order?</p>
                <p class="confirm-desc b3">This action cannot be undone</p>
                <div class="del-add-button">
                    <button type="submit" class="keep b2">Keep Order</button>
                    <button type="submit" class="btn-del b2">Cancel Order</button>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('transaction-delete') }}" name="TransactionDelete">
        <input type="hidden" name="TransactionID" id="TransactionID">
    </form>
    <form action="{{ route('transaction-review') }}" name="TransactionReview">
        <input type="hidden" name="TransactionID" id="TransactionIDReview">
    </form>
</body>
</html>
