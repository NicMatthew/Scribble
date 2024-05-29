let email = document.getElementById("email")
let password = document.getElementById("password")
let submitBtn = document.getElementById("submit-btn")
let alertArr = []

function removeAllAlert() {
    alertArr.forEach((alert)=>{
        alert.classList.remove("alert")
        alert.lastElementChild.remove()
    })

    alertArr = []
}

submitBtn.addEventListener("click", (e)=>{
    removeAllAlert()

    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)) {
        let parEl = email.parentElement
        let alert = document.createElement("p")
        alert.innerHTML = "Email is not valid!"

        parEl.classList.add("alert")
        alertArr.push(parEl)
        parEl.appendChild(alert)
    }

    if (password.value.length == 0) {
        let parEl = password.parentElement
        let alert = document.createElement("p")
        alert.innerHTML = "Password can't be empty!"

        parEl.classList.add("alert")
        alertArr.push(parEl)
        parEl.appendChild(alert)
    }

    if (alertArr.length == 0) {
        document.forms["login-form"].submit()
    }
})
