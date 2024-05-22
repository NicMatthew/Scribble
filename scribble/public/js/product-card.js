var wishBtns = document.querySelectorAll(".wish")

wishBtns.forEach((btn)=>{
    btn.addEventListener("click", (e)=>{
        if (btn.firstElementChild.src.includes("love-outline.svg")) {
            btn.firstElementChild.src = "/icons/love-fill.svg"
        } else {
            btn.firstElementChild.src = "/icons/love-outline.svg"
        }

    })
})

