// var wishBtns = document.querySelectorAll(".wish")
// var urlInput = document.getElementById("urlInput")

// wishBtns.forEach((btn)=>{
//     btn.addEventListener("click", (e)=>{
//         if (btn.firstElementChild.src.includes("love-outline.svg")) {
//             btn.firstElementChild.src = "/icons/love-fill.svg"
//         } else {
//             btn.firstElementChild.src = "/icons/love-outline.svg"
//         }
//         urlInput.value = document.URL
//         // alert(document.URL)
//         document.forms["wish-form"].submit()
//     })
// })

var wishBtns = document.querySelectorAll(".wish")
var urlInput = document.getElementById("urlInput")

wishBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent the default form submission
        var img = btn.querySelector('img');
        if (img.src.includes("love-outline.svg")) {
            img.src = "/icons/love-fill.svg";
        } else {
            img.src = "/icons/love-outline.svg";
        }
        urlInput.value = document.URL;
        btn.closest('form').submit(); // Submit the form
    });
});
