let addDisc = document.getElementById("discount-add")
let addBanner = document.getElementById("banner-add")
let bannSubmitBtn = document.getElementById("submit-banner")
let bannRemBtns = document.querySelectorAll(".banner-remove")
let bannDelBtn = document.getElementById("rem-btn")
let discRemBtns = document.querySelectorAll(".discount-remove")
let modal = document.getElementById("modal")
let cancelBtn = document.getElementById("cancel-btn")
let msgContainer = document.getElementById("message-container")
let closeDiscBtn = document.getElementById("close-btn-disc")
let closeBannerBtn = document.getElementById("close-btn-banner")
let discContainer = document.getElementById("add-discount-container")
let bannerContainer = document.getElementById("add-banner-container")
let bannerImg = document.getElementById("banner-image")
let imgPreview = document.getElementById("img-preview")
let bannerPreview = document.getElementById("banner-preview")
let closePreview = document.getElementById("close-preview")
let submit_add = document.getElementById("add-new-disc")
{{  }}
submit_add.addEventListener('click', (e) => {
    console.log(document.forms["disc-form"]);

    document.forms["disc-form"].submit();
    console.log('test');
})

function delBann(banner) {
    window.location.href = banner.firstElementChild.href
}

bannRemBtns.forEach(btn => {
    btn.addEventListener("click", (e)=>{
        modal.classList.add("show")
        msgContainer.classList.add("show")
        bannDelBtn.addEventListener("click", (e)=>{
            delBann(btn)
        })
    })
})

let shipmentVoucher = document.getElementById("VoucherShipmentID");
let productVoucher = document.getElementById("VoucherProductID");
discRemBtns.forEach(btn => {
    btn.addEventListener("click", (e)=>{
        modal.classList.add("show")
        msgContainer.classList.add("show")
        let type = btn.parentElement.children[0].children[1].children[1].innerHTML;
        let voucherID = btn.parentElement.children[0].getAttribute('value').split(';')[0]
        console.log(voucherID)
        if (type == "Shipment Voucher") {
            shipmentVoucher.value = voucherID
            productVoucher.value = null
        } else {
            productVoucher.value = voucherID
            shipmentVoucher.value = null
        }
        bannDelBtn.addEventListener("click", (e) => {
            // submit form
            console.log('test')
            document.forms["delete-voucher"].submit();
        });
        
    })
})

addDisc.addEventListener("click", (e)=>{
    modal.classList.add("show")
    discContainer.classList.add("show")
})

addBanner.addEventListener("click", (e)=>{
    modal.classList.add("show")
    bannerContainer.classList.add("show")
})

cancelBtn.addEventListener("click", (e)=>{
    modal.classList.remove("show")
    msgContainer.classList.remove("show")
})

closeDiscBtn.addEventListener("click", (e)=>{
    modal.classList.remove("show")
    discContainer.classList.remove("show")
})

closeBannerBtn.addEventListener("click", (e)=>{
    modal.classList.remove("show")
    bannerContainer.classList.remove("show")
})

bannerImg.addEventListener("change", (e)=>{
    imgPreview.src = URL.createObjectURL(bannerImg.files[0])
    bannerPreview.classList.add("show")

    // submit new banner
    bannSubmitBtn.addEventListener("click", (e)=>{
        document.forms["banner-form"].submit()
    })
})

closePreview.addEventListener("click", (e) =>{
    bannerPreview.classList.remove("show")
})


