var moreButton = document.querySelectorAll(".more-btn")
var popup = document.getElementsByClassName('edit-delete-popup')

// for (let i = 0; i < moreButton.length; i++) {
//     moreButton[i].addEventListener("click", (e)=>{
//         if (moreButton[i].parentElement.lastElementChild.classList.contains("show") != true) {
//             // moreButton[i].parentElement.lastElementChild.classList.add("show")
//             if (i == moreButton.length-1) {
//                 moreButton[i].parentElement.lastElementChild.classList.add("up")
//             }
//         } else {
//             moreButton[i].parentElement.lastElementChild.classList.remove("show")
//             if (i == moreButton.length-1) {
//                 moreButton[i].parentElement.lastElementChild.classList.remove("up")
//             }
//         }
//     })
// }
var lastActive = null;
for (let i = 0; i < moreButton.length; i++) {
    moreButton[i].addEventListener("click", (e)=>{
        if (popup[i].classList.contains("show") != true) {
            // tombol akan active
            if(lastActive != null){
                lastActive.classList.remove("show")
            }
            // moreButton[i].parentElement.lastElementChild.classList.add("show")
            console.log("test")
            popup[i].classList.add("show")
            if (i == moreButton.length-1) {
                moreButton[i].parentElement.lastElementChild.classList.add("up")
            }
            lastActive = popup[i]
        } else {
            popup[i].classList.remove("show")
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