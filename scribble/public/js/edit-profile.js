const editBtn = document.getElementById("edit-btn")
const fileInput = document.getElementById("input-image")
const profPict = document.getElementById("profile-pict")

editBtn.addEventListener("click", (e)=>{
    fileInput.click()
})

fileInput.addEventListener("change", (e)=>{
    profPict.src = URL.createObjectURL(fileInput.files[0])
})
