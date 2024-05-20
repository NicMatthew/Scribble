const voucherBtn = document.getElementById("voucher-btn")
const modal = document.getElementById("modal")
const closeBtn = document.getElementById("close-btn")
const voucherSel = document.getElementById("voucher-title")
let selVoucher = null

voucherBtn.addEventListener("click", (e)=>{
    modal.classList.add("active")
})

function closeOverlay() {
    modal.classList.remove("active")
}
closeBtn.addEventListener("click", (e)=>closeOverlay())

const voucherList = document.querySelectorAll(".wrapper")

voucherList.forEach((voucher)=>{
    voucher.addEventListener("click", (e)=>{
        const voucherName = voucher.children[1].firstElementChild.innerHTML
        voucherSel.innerHTML = voucherName
        if (selVoucher != null) {
            selVoucher.classList.remove("selected-voucher")
        }
        selVoucher = voucher
        voucher.classList.add("selected-voucher")
        closeOverlay()
    })
})
