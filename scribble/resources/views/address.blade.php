<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link href="/css/variable.css" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/4d9121ebec.js" crossorigin="anonymous"></script> -->
    <link href="/css/address.css" rel="stylesheet">
    <link href="/css/header-standard.css" rel="stylesheet">
    <script src="/js/address.js" defer=""></script>
</head>
<body>
    {{-- @dd(count($addresses)) --}}
    <div class="big-container">
        <div class="header">
            <div class="back-btn" onclick="history.back()">
                <img src="/icons/prev.svg">
            </div>
            <div class="header-title">Address</div>
            <div class="plus-btn">
                <img src="/icons/plus-address.svg">
            </div>
            <hr class="divider">
        </div>
        @foreach ($addresses as $address)
        <div class="address">
            <div class="left-address">
                <p style="color: var(--prim-1); font-weight:bold; font-size: 18px; margin-bottom: 5px">{{ $address->AddressName}}</p>
                <p style="color: var(--dark-grey); font-weight:bold; font-size: 20px; margin-bottom: 5px">{{ $address->RecipientName}}</p>
                <p style="color: var(--dark-grey); font-size: 18px; margin-bottom: 5px">{{ $address->PhoneNumber}}</p>
                <p style="color: var(--dark-grey); font-size: 18px; margin-bottom: 5px">{{ $address ->FullAddress}}</p>
            </div>
            <div class="right-address" id="{{ $address->AddressID }}">
                <img src="/icons/exit-address.svg" style="width: 50px; height: 50px; cursor:pointer;" alt="">
                <img src="/icons/edit.svg" style="width: 50px; height: 50px; cursor:pointer;" class="edit-btn" alt="">
            </div>
        </div>
        @endforeach
        {{-- <div class="address">
            <div class="left-address">
                <p style="color: var(--prim-1); font-weight:bold; font-size: 18px; margin-bottom: 5px">Rumah</p>
                <p style="color: var(--dark-grey); font-weight:bold; font-size: 20px; margin-bottom: 5px">Hans Christian</p>
                <p style="color: var(--dark-grey); font-size: 18px; margin-bottom: 5px">083871929060</p>
                <p style="color: var(--dark-grey); font-size: 18px; margin-bottom: 5px">Jl. Pakuan No. 5, Kelurahan Sumur Batu, Kecamatan Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</p>
            </div>
            <div class="right-address">
                <img src="/icons/exit-address.svg" style="width: 50px; height: 50px; cursor:pointer;" alt="">
                <img src="/icons/edit.svg" style="width: 50px; height: 50px; cursor:pointer;" alt="">
            </div>
        </div>
        <div class="address">
            <div class="left-address">
                <p style="color: var(--prim-1); font-weight:bold; font-size: 18px; margin-bottom: 5px">Rumah</p>
                <p style="color: var(--dark-grey); font-weight:bold; font-size: 20px; margin-bottom: 5px">Hans Christian</p>
                <p style="color: var(--dark-grey); font-size: 18px; margin-bottom: 5px">083871929060</p>
                <p style="color: var(--dark-grey); font-size: 18px; margin-bottom: 5px">Jl. Pakuan No. 5, Kelurahan Sumur Batu, Kecamatan Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</p>
            </div>
            <div class="right-address">
                <img src="/icons/exit-address.svg" style="width: 50px; height: 50px; cursor:pointer;" alt="">
                <img src="/icons/edit.svg" style="width: 50px; height: 50px; cursor:pointer;" alt="">
            </div>
        </div> --}}

        <div class="modal" id="modal">
            <div class="overlay">
                <p class="b1" style="font-weight: bold; margin-bottom:15px; display:flex; align-items: center; justify-content: center">New Address</p>
                <form method="POST" action="{{ route('add-address') }}" class="form-address">
                    @csrf
                    <div class="form-address">
                        <div class=input-box>
                            <p>Address Name</p>
                            <input type="text" name="address_name" placeholder="Address Name" required>
                        </div>
                        <div class=input-box>
                            <p>Recipient Name</p>
                            <input type="text"name="recipient_name" placeholder="Recipient Name" required>
                        </div>
                        <div class=input-box>
                            <p>Phone Number</p>
                            <input type="text" name="phone_number" placeholder="Phone Number" required>
                        </div>
                        <div class=input-box>
                            <p>Full Address</p>
                            <input type="text" name="full_address" placeholder="Full Address" required>
                        </div>
                        <div class=input-box>
                            <p>Post Code</p>
                            <input type="text" name="post_code" placeholder="Post Code" required>
                        </div>
                        <button type="submit" class="btn">Add Address</button>
                        <button type="submit" class="cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="modal-delete" id="modal-delete">
            <div class="overlay-2">
                <div class="form-delete">
                    <img src="/icons/reminder-delete.svg" style="margin-bottom:15px; display:flex; align-items: center; justify-content: center" alt="">
                    <p class="confirm b1">Are you sure want to delete this address ?</p>
                    <div class="del-add-button">
                        <button type="submit" class="keep b2">Keep Address</button>

                        <form action="{{ route('delete-address') }}" method="POST">
                            @csrf
                            <input type="hidden" value="" name="addressID" id="addressID">
                            @method('DELETE')
                            <button type="submit" class="btn-del b2">Delete Address</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</body>
</html>
