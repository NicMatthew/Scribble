let name = document.getElementById("name")
let dob = document.getElementById("dob")
let phoneNumber = document.getElementById("phoneNumber")
let email = document.getElementById("email")
let password = document.getElementById("password")
let submitBtn = document.getElementById("submit-btn")
let passEye = document.getElementById("pass-eye")
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

    if (!/^[a-zA-Z\s]+$/.test(name.value)) {
        let parEl = name.parentElement
        let alert = document.createElement("p")
        alert.innerHTML = "Name only can contain alphabets only!"

        parEl.classList.add("alert")
        alertArr.push(parEl)
        parEl.appendChild(alert)
    }

    if (new Date(dob.value).getTime() >= new Date().getTime() || dob.value == "") {
        let parEl = dob.parentElement
        let alert = document.createElement("p")
        alert.innerHTML = "Date only can be less than today!"

        parEl.classList.add("alert")
        alertArr.push(parEl)
        parEl.appendChild(alert)
    }

    if (!/^[0-9]+$/.test(phoneNumber.value)) {
        let parEl = phoneNumber.parentElement
        let alert = document.createElement("p")
        alert.innerHTML = "Phone number only can numbers only!"

        parEl.classList.add("alert")
        alertArr.push(parEl)
        parEl.appendChild(alert)
    }

    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)) {
        let parEl = email.parentElement
        let alert = document.createElement("p")
        alert.innerHTML = "Email is not valid!"

        parEl.classList.add("alert")
        alertArr.push(parEl)
        parEl.appendChild(alert)
    }

    if (password.value.length < 8) {
        let parEl = password.parentElement.parentElement
        let alert = document.createElement("p")
        alert.innerHTML = "Password must be at least 8 characters!"

        parEl.classList.add("alert")
        alertArr.push(parEl)
        parEl.appendChild(alert)
    }

    if (alertArr.length == 0) {
        document.forms["sign-in-form"].submit()
    }
})

passEye.addEventListener("click", (e)=>{
    if (password.type == "password") {
        password.type = "text"
        passEye.src = "/icons/eyes-open.svg"
    } else {
        password.type = "password"
        passEye.src = "/icons/eyes-close.svg"
    }
})
