<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Management</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/order-admin.css">
    <script src="/js/order-admin.js" defer=""></script>
</head>
<body>
    @include("components/sidebar-admin")
    <div class="order-content">
        <div class="title">
            <p class="h1">Orders Management</p>
        </div>
        <hr>
        <div class="orders">
            <div class="title-order">
                <p class="h2 all-orders-title">All Orders</p>
                <p class="b2 total-orders">Total Orders: {{ $transactions->count() }}</p>
            </div>
            <div class="all-orders">
                <table>
                    <tr class="head">
                        <th class="b2">No</th>
                        <th class="b2">Order ID</th>
                        <th class="b2">Order Date</th>
                        <th class="b2">Status</th>
                        <th class="b2">Total Payment</th>
                        <th class="b2">Action</th>
                    </tr>
                    @foreach($transactions as $key => $transaction)
                        <tr class="data">
                            <td class="b2">{{ $key + 1 }}</td>
                            <td class="b2">{{ $transaction->TransactionID }}</td>
                            <td class="b2">{{ $transaction->TransactionDate }}</td>
                            <td class="b2" style="font-weight : bold ; @if($transaction->TransactionStatus === 'Paid') color: black; @elseif($transaction->TransactionStatus === 'Packaged') color: #EDC158; @elseif($transaction->TransactionStatus === 'In Delivery') color: #52A9CF; @elseif($transaction->TransactionStatus === 'Finished') color: #78C354; @elseif($transaction->TransactionStatus === 'Canceled') color: #F2758F; @endif">{{ $transaction->TransactionStatus }}</td>
                            <td class="b2">Rp {{ number_format($transaction->TotalPrice, 0, ',', '.') }}</td>
                            <td>
                                <div class="action-btn">
                                    @if(!in_array($transaction->TransactionStatus, ['Finished', 'Cancelled']))
                                        <form action="{{ route('order-admin-update', $transaction->TransactionID) }}" method="POST" class="form-proceed">
                                            @csrf
                                            <input type="hidden" name="status" value="{{ $transaction->TransactionStatus === 'Paid' ? 'Packaged' : ($transaction->TransactionStatus === 'Packaged' ? 'In Delivery' : 'Finished') }}">
                                            <input type="submit" value="Proceed" class="proceed-btn b2"/>
                                        </form>
                                        @if($transaction->TransactionStatus !== 'In Delivery')
                                            <form action="{{ route('order-admin-update', $transaction->TransactionID) }}" method="POST" class="form-cancel">
                                                @csrf
                                                <input type="hidden" name="status" value="Cancelled">
                                                <input type="submit" value="Cancel" class="cancel-btn b2"/>
                                            </form>
                                        @endif
                                    @endif
                                    @if($transaction->TransactionStatus === 'Finished')
                                        <p class="b2">Completed</p>
                                    @endif
                                    @if($transaction->TransactionStatus === 'Cancelled')
                                        <p class="b2">Cancelled</p>
                                    @endif
                                    {{-- <form action="#">
                                        <input type="submit" value="Proceed" class="proceed-btn b2"/>
                                    </form>
                                    <form action="#">
                                        <input type="submit" value="Cancel" class="cancel-btn b2"/>
                                    </form> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{-- <div class="table-navigation">
                    <a href="#"><img src="/icons/previous-icon-order-admin.svg" alt=""></a>
                    <p class="b2">1</p>
                    <a href="#"><img src="/icons/next-icon-order-admin.svg" alt=""></a>
                </div> --}}
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

    <div class="modal-proceed hidden" id="modal-proceed">
        <div class="overlay-2">
            <div class="form-delete">
                <img src="/icons/reminder-delete.svg" class="exclaimation-mark" alt="">
                <p class="confirm b1">Are you sure you want to proceed order?</p>
                <p class="confirm-desc b3">This action cannot be undone</p>
                <div class="del-add-button">
                    <button type="submit" class="keep2 b2">Keep Order</button>
                    <button type="submit" class="btn-proceed b2">Proceed Order</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
