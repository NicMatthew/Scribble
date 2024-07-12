<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction List</title>
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
                                <p class="b1 status">{{  $transaction->TransactionStatus }}</p>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="grand-total">
                                <p class="b2">Grand Total: <span class="b1 total">Rp. {{  $transaction->TotalPrice }}</span></p>
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
                                                        <p class="b2 total-price-text">Total Price:  <span class="b1 price-text">Rp. {{ $details->Price*$details->Quantity }}</span></p>
                                                    </div>
                                                    <div class="qty">
                                                        <p class="b2 qty-text">Quantity: {{ $details->Quantity }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-side-item">
                                            <a href="#" class="buy-again-btn">
                                                <img src="/icons/trolley.svg" alt="tes">
                                                <p class="b2 buy-again-text">Buy Again</p>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="cancellation">
                                <a href="#" class="cancel-btn" id="cancel-btn">
                                    <img src="/icons/cancel-order.svg" alt="tes">
                                    <p class="b2 cancel-text">Cancel</p>
                                </a>
                            </div>
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
</body>
</html>
