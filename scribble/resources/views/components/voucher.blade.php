<div class="discount">
    @if ($voucher->DiscountCategory==null)
        <div class="wrapper" id="" value="{{$voucher->VoucherShipmentID.";".$voucher->Value}}">
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
        <div class="wrapper" id="" value="{{$voucher->VoucherProductID.";".$voucher->Value}}">
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
