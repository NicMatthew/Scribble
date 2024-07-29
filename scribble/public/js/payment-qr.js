let submitButton = document.getElementById("submit-button")
let overlay = document.getElementById("overlay")
let qr = document.getElementById("qr")
let otp = null
let modal = document.getElementById("modal");
let cancelBtn = document.getElementById("cancel-btn");

function randomizeOTP() {
    otp = Math.round(Math.random()*1000000)
    qr.src = "https://qrcode.tec-it.com/API/QRCode?data=" + otp
}

function checkOTP() {
    let inputOtp = document.getElementById("input-otp").value

    if (inputOtp == otp) {
        otpTrue()
    } else {
        // alert("Wrong OTP code!")
        showModal()
        randomizeOTP()
    }
}

function otpTrue() {
    overlay.style.display = "block"
    setInterval(()=>{
        document.forms["otp-form"].submit()
    }, 3000)
}

function showModal() {
    modal.style.display = "flex";
}

function hideModal() {
    modal.style.display = "none";
}

submitButton.addEventListener("click", (e) => checkOTP());
cancelBtn.addEventListener("click", (e) => hideModal());
randomizeOTP();
// submitButton.addEventListener("click", (e)=>checkOTP());
// randomizeOTP()
