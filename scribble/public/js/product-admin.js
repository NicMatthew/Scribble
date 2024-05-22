var moreButton = document.querySelectorAll(".more-btn")
// var popup = document.getElementByIq("popup")

for (let i = 0; i < moreButton.length; i++) {
    moreButton[i].addEventListener("click", (e)=>{
        if (moreButton[i].parentElement.lastElementChild.classList.contains("show") != true) {
            moreButton[i].parentElement.lastElementChild.classList.add("show")
            if (i == moreButton.length-1) {
                moreButton[i].parentElement.lastElementChild.classList.add("up")
            }
        } else {
            moreButton[i].parentElement.lastElementChild.classList.remove("show")
            if (i == moreButton.length-1) {
                moreButton[i].parentElement.lastElementChild.classList.remove("up")
            }
        }
    })
}

// moreButton.addEventListener("click", otpTrue, true);

// function otpTrue() {
//     // alert("Hi");
//     popup.style.display = "block"
// }