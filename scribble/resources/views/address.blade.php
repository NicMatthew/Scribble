<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/variable.css" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/4d9121ebec.js" crossorigin="anonymous"></script> -->
    <link href="/css/address.css" rel="stylesheet">
    <link href="/css/header-standard.css" rel="stylesheet">
    <script src="/js/address.js" defer=""></script>
</head>
<body>
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
        <div class="address">
            <div class="left-address">
                <p style="color: var(--prim-1); font-weight:bold; font-size: 18px; margin-bottom: 5px">Rumah</p>
                <p style="color: var(--dark-grey); font-weight:bold; font-size: 20px; margin-bottom: 5px">Hans Christian</p>
                <p style="color: var(--dark-grey); font-size: 18px; margin-bottom: 5px">083871929060</p>
                <p style="color: var(--dark-grey); font-size: 18px; margin-bottom: 5px">Jl. Pakuan No. 5, Kelurahan Sumur Batu, Kecamatan Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</p>
            </div>
            <div class="right-address">
                <img src="/icons/exit-address.svg" style="width: 50px; height: 50px; cursor:pointer;" alt="">
                <img src="/icons/next.svg" style="width: 50px; height: 50px; cursor:pointer;" alt="">
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
                <img src="/icons/next.svg" style="width: 50px; height: 50px; cursor:pointer;" alt="">
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
                <img src="/icons/next.svg" style="width: 50px; height: 50px; cursor:pointer;" alt="">
            </div>
        </div>

        <div class="modal" id="modal">
            <div class="overlay">
                <p class="b1" style="font-weight: bold; margin-bottom:15px; display:flex; align-items: center; justify-content: center">New Address</p>
                <div class="form-address">
                    <div class=input-box>
                        <p>Address Name</p>
                        <input type="text" placeholder="Address Name" required>
                    </div>
                    <div class=input-box>
                        <p>Recipient Name</p>
                        <input type="text" placeholder="Recipient Name" required>
                    </div>
                    <div class=input-box>
                        <p>Phone Number</p>
                        <input type="text" placeholder="Phone Number" required>
                    </div>
                    <div class=input-box>
                        <p>Full Address</p>
                        <input type="text" placeholder="Full Address" required>
                    </div>
                    <div class=input-box>
                        <p>Post Code</p>
                        <input type="text" placeholder="Post Code" required>
                    </div>
                    <button type="submit" class="btn">Add Address</button>
                    <button type="submit" class="cancel">Cancel</button>
                </div>
            </div>
        </div>


        <div class="modal-delete" id="modal-delete">
            <div class="overlay-2">
                <div class="form-delete">
                    <img src="/icons/reminder-delete.svg" style="margin-bottom:15px; display:flex; align-items: center; justify-content: center" alt="">
                    <p class="confirm">Are you sure want to delete this address ?</p>
                    <div class="del-add-button">
                        <button type="submit" class="keep">Keep Address</button>
                        <button type="submit" class="btn-del">Delete Address</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</body>
</html>
