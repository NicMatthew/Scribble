const voucherBtn = document.getElementById("voucher-btn");
const modal = document.getElementById("modal");
const message = document.getElementById("message-container")
const voucherList = document.getElementById("voucherList")
const closeBtn = document.getElementById("close-btn");
const voucherSel = document.getElementById("voucher-title");
let vouchersProduct = document.getElementById("voucherProduct").children
let vouchersShipment = document.getElementById("voucherShipment").children
let selectedShipment = null
let selectedProduct = null
let subtotalPrice = document.getElementById("subtotalPrice")
let discountPrice = document.getElementById("discountPrice")
let totalPrice = document.getElementById("totalPrice")
let voucherShipmentID = document.getElementById("voucherShipmentID")
let voucherProductID = document.getElementById("voucherProductID")
let totalPriceInput = document.getElementById("totalPriceInput")
let payBtn = document.getElementById("pay-btn")

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

voucherBtn.addEventListener("click", (e) => {
    voucherList.classList.add("active")
    modal.classList.add("active");
});

closeBtn.addEventListener("click", (e) => {
    closeOverlay();
});

function closeOverlay() {
    voucherList.classList.remove("active")
    modal.classList.remove("active");
}

function displaySelVoucher() {
    if (selectedProduct == null) {
        voucherSel.innerHTML = selectedShipment.querySelector(".voucher-name").innerHTML
    } else if(selectedShipment == null) {
        voucherSel.innerHTML = selectedProduct.querySelector(".voucher-name").innerHTML
    } else {
        voucherSel.innerHTML = selectedProduct.querySelector(".voucher-name").innerHTML + ", " + selectedShipment.querySelector(".voucher-name").innerHTML
    }
}

function resetDimm(vouchers) {
    for (let i = 0; i < vouchers.length; i++) {
        let voucher = vouchers[i]

        if (voucher.classList.contains("dimmed-voucher")) {
            voucher.classList.remove("dimmed-voucher")
        }
    }
}

function dimmVoucher(vouchers) {
    resetDimm(vouchers)

    for (let i = 0; i < vouchers.length; i++) {
        let voucher = vouchers[i]

        if (voucher !=  selectedProduct  && voucher != selectedShipment) {
            voucher.classList.add("dimmed-voucher")
        }
    }
}

function setPrice() {
    let val1 = 0;
    let val2 = 0;

    if (selectedProduct != null) {
        val1 = parseFloat(selectedProduct.firstElementChild.getAttribute("value").split(";")[1])
    }

    if (selectedShipment != null) {
        val2 = parseFloat(selectedShipment.firstElementChild.getAttribute("value").split(";")[1])
    }

    tempSub = parseInt(subtotalPrice.innerText.replaceAll(".", "").substring(3))
    tempDiscount = 0

    if (val1 < 1) {
        tempDiscount += tempSub * val1
    } else {
        tempDiscount += val1
    }

    if (val2 < 1) {
        tempDiscount += (tempSub * val2)
    } else {
        tempDiscount += val2
    }


    discountPrice.innerText = "Rp. " + numberWithCommas(tempDiscount)
    totalPrice.innerText = "Rp. " + numberWithCommas(tempSub - tempDiscount + 5000)
    totalPriceInput.value = tempSub - tempDiscount + 5000
}

for (let i = 0; i < vouchersProduct.length; i++) {
    let voucher = vouchersProduct[i]
    voucher.addEventListener("click", (e)=>{
        if (voucher == selectedProduct) {
            voucher.firstElementChild.classList.remove("selected-voucher")
            selectedProduct = null
            resetDimm(vouchersProduct)
            setPrice()
            return
        }
        if (selectedProduct != null) {
            selectedProduct.firstElementChild.classList.remove("selected-voucher")
        }

        const voucherId = voucher.firstElementChild.getAttribute("value").split(";")[0]
        const voucherValue = voucher.firstElementChild.getAttribute("value").split(";")[1]
        const voucherName = voucher.querySelector(".voucher-name").innerHTML

        voucher.firstElementChild.classList.add("selected-voucher")
        selectedProduct = voucher
        voucherProductID.value = voucherId

        displaySelVoucher()
        dimmVoucher(vouchersProduct)
        setPrice()
    })
}

for (let i = 0; i < vouchersShipment.length; i++) {
    let voucher = vouchersShipment[i]
    voucher.addEventListener("click", (e)=>{
        if (voucher == selectedShipment) {
            voucher.firstElementChild.classList.remove("selected-voucher")
            selectedShipment = null
            resetDimm(vouchersShipment)
            setPrice()
            voucherShipmentID.value = null
            return
        }

        if (selectedShipment != null) {
            selectedShipment.firstElementChild.classList.remove("selected-voucher")
        }

        const voucherId = voucher.firstElementChild.getAttribute("value").split(";")[0]
        const voucherValue = voucher.firstElementChild.getAttribute("value").split(";")[1]
        const voucherName = voucher.querySelector(".voucher-name").innerHTML

        selectedShipment = voucher
        voucher.firstElementChild.classList.add("selected-voucher")
        voucherShipmentID.value = voucherId

        displaySelVoucher()
        dimmVoucher(vouchersShipment)
        setPrice()
    })
}

modal.addEventListener("click", (e) => {
    if (e.target === modal) {
        closeOverlay();
    }
});

payBtn.addEventListener("click", (e)=>{
    if(document.getElementById('addressID').value == ''){
        modal.classList.add("active")
        message.classList.add("active")
    }else{
        document.forms["shipping-form"].submit()
    }
})

document.getElementById("cancel-btn").addEventListener("click", (e)=>{
    modal.classList.remove('active')
    message.classList.remove('active')
})

let addressSelect = document.getElementById("address-select");
addressSelect.href = addressSelect.href + "?" + window.location.href.split("?")[1];
setPrice()
