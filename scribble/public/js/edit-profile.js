const editBtn = document.getElementById("edit-btn")
const fileInput = document.getElementById("input-image")
const profPict = document.getElementById("profile-pict")

editBtn.addEventListener("click", (e)=>{
    fileInput.click()
})

fileInput.addEventListener("change", (e)=>{
    profPict.src = URL.createObjectURL(fileInput.files[0])
})




// const passwordInput = document.querySelector(".password-input");
// passwordInput.addEventListener("input", function () {
//     const password = this.value;
//     let passwordMasked = "";
//     for (let i = 0; i < password.length; i++) {
//         passwordMasked += "•";
//     }
//     this.placeholder = passwordMasked + "•••••••";
// });