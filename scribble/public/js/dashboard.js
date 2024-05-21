let addDisc = document.getElementById("discount-add")
let addBanner = document.getElementById("banner-add")
let bannRemBtns = document.querySelectorAll(".banner-remove")
let discRemBtns = document.querySelectorAll(".discount-remove")
let modal = document.getElementById("modal")
let cancelBtn = document.getElementById("cancel-btn")
let msgContainer = document.getElementById("message-container")
let closeBtn = document.getElementById("close-btn")
let discContainer = document.getElementById("add-discount-container")

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
    discContainer.classList.add("show")
})

cancelBtn.addEventListener("click", (e)=>{
    modal.classList.remove("show")
    msgContainer.classList.remove("show")
})

closeBtn.addEventListener("click", (e)=>{
    modal.classList.remove("show")
    discContainer.classList.remove("show")
})
