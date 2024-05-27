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
                <p class="b2 total-orders">Total Orders: 5</p>
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
                    <tr class="data">
                        <td class="b2">1</td>
                        <td class="b2">OD001</td>
                        <td class="b2">5 May 2024</td>
                        <td class="b2">Packaged</td>
                        <td class="b2">Rp 100.000</td>
                        <td>
                            <div class="action-btn">
                                <form action="#">
                                    <input type="submit" value="Proceed" class="proceed-btn b2"/>
                                </form>
                                <form action="#">
                                    <input type="submit" value="Cancel" class="cancel-btn b2"/>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="data">
                        <td class="b2">1</td>
                        <td class="b2">OD001</td>
                        <td class="b2">5 May 2024</td>
                        <td class="b2">Packaged</td>
                        <td class="b2">Rp 100.000</td>
                        <td>
                            <div class="action-btn">
                                <form action="#">
                                    <input type="submit" value="Proceed" class="proceed-btn b2"/>
                                </form>
                                <form action="#">
                                    <input type="submit" value="Cancel" class="cancel-btn b2"/>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="data">
                        <td class="b2">1</td>
                        <td class="b2">OD001</td>
                        <td class="b2">5 May 2024</td>
                        <td class="b2">Packaged</td>
                        <td class="b2">Rp 100.000</td>
                        <td>
                            <div class="action-btn">
                                <form action="#">
                                    <input type="button" value="Proceed" class="proceed-btn b2"/>
                                </form>
                                <form action="#">
                                    <input type="button" value="Cancel" class="cancel-btn b2"/>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="data">
                        <td class="b2">1</td>
                        <td class="b2">OD001</td>
                        <td class="b2">5 May 2024</td>
                        <td class="b2">Packaged</td>
                        <td class="b2">Rp 100.000</td>
                        <td>
                            <div class="action-btn">
                                <form action="#">
                                    <input type="submit" value="Proceed" class="proceed-btn b2"/>
                                </form>
                                <form action="#">
                                    <input type="submit" value="Cancel" class="cancel-btn b2"/>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="data">
                        <td class="b2">1</td>
                        <td class="b2">OD001</td>
                        <td class="b2">5 May 2024</td>
                        <td class="b2">Finished</td>
                        <td class="b2">Rp 100.000</td>
                        {{-- <td class="b2"></td> --}}
                    </tr>
                </table>
                <div class="table-navigation">
                    <a href="#"><img src="/icons/previous-icon-order-admin.svg" alt=""></a>
                    <a href="#"><img src="/icons/next-icon-order-admin.svg" alt=""></a>
                </div>
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
