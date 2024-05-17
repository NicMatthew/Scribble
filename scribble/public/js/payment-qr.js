var submitButton = document.getElementById("submit-button")
var overlay = document.getElementById("overlay")

submitButton.addEventListener("click", otpTrue, true);

function otpTrue() {
    // alert("Hi");
    overlay.style.display = "block"
}