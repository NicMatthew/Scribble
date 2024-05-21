let addDisc = document.getElementById("discount-add")
let addBanner = document.getElementById("banner-add")
let bannRemBtns = document.querySelectorAll(".banner-remove")
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


bannRemBtns.forEach(btn => {
    btn.addEventListener("click", (e)=>{
        modal.classList.add("show")
        msgContainer.classList.add("show")
    })
})

discRemBtns.forEach(btn => {
    btn.addEventListener("click", (e)=>{
        modal.classList.add("show")
        msgContainer.classList.add("show")
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
})

closePreview.addEventListener("click", (e) =>{
    bannerPreview.classList.remove("show")
})
