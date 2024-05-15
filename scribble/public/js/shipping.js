const voucherBtn = document.getElementById("voucher-btn")
const modal = document.getElementById("modal")
const closeBtn = document.getElementById("close-btn")

voucherBtn.addEventListener("click", (e)=>{
    modal.classList.add("active")
})

closeBtn.addEventListener("click", (e)=>{
    modal.classList.remove("active")
})
