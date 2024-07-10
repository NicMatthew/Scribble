<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voucher</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/voucher.css">
    <link rel="stylesheet" href="/css/variable.css">
</head>
<body>
    <div class="discount">
        @if ($voucher->DiscountCategory==null)
            <div class="wrapper" id="" value="{{$voucher->VoucherShipmentID}}"> 
                <img src="/icons/voucher-green.svg" class="voucher-img">
                <div class="details-info">
                    <div class="voucher-name">{{$voucher->VoucherName}}</div>
                    <div class="voucher-condition">500k off on any products</div>
                    <div class="voucher-period">{{$voucher->StartDate}} - {{$voucher->EndDate}}</div>
                </div>  
                <img src="/icons/next-green.svg" class="voucher-next">
            </div>
            <div class="discount-remove">
                <img src="/icons/trash-bin-white.svg" class="remove-icon">
            </div> 
        @else
        <div class="wrapper" id="" value="{{$voucher->VoucherProductID}}"> 
                <img src="/icons/voucher-green.svg" class="voucher-img">
                <div class="details-info">
                    <div class="voucher-name">{{$voucher->VoucherName}}</div>
                    <div class="voucher-condition">500k off on any products</div>
                    <div class="voucher-period">{{$voucher->StartDate}} - {{$voucher->EndDate}}</div>
                </div>  
                <img src="/icons/next-green.svg" class="voucher-next">
            </div>
            <div class="discount-remove">
                <img src="/icons/trash-bin-white.svg" class="remove-icon">
            </div>
        @endif
        
    </div>
</body>
</html>
