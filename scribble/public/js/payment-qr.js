let submitButton = document.getElementById("submit-button")
let overlay = document.getElementById("overlay")
let qr = document.getElementById("qr")
let otp = null

function randomizeOTP() {
    otp = Math.round(Math.random()*1000000)
    qr.src = "https://qrcode.tec-it.com/API/QRCode?data=" + otp
}

function checkOTP() {
    let inputOtp = document.getElementById("input-otp").value

    if (inputOtp == otp) {
        otpTrue()
    } else {
        alert("Wrong OTP code!")
        randomizeOTP()
    }
}

function otpTrue() {
    overlay.style.display = "block"
}

submitButton.addEventListener("click", (e)=>checkOTP());
randomizeOTP()
