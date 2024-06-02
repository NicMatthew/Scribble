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



let addDisc = document.getElementById("product-add");
let discRemBtns = document.querySelectorAll(".discount-remove");
let modal = document.getElementById("modal");
let cancelBtn = document.getElementById("cancel-btn");
let msgContainer = document.getElementById("message-container");
let closeDiscBtn = document.getElementById("close-btn-disc");
let discContainer = document.getElementById("add-discount-container");
let bannerContainer = document.getElementById("add-banner-container");



discRemBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        modal.classList.add("show");
        msgContainer.classList.add("show");
    });
});

addDisc.addEventListener("click", (e) => {
    modal.classList.add("show");
    discContainer.classList.add("show");
});


closeDiscBtn.addEventListener("click", (e) => {
    modal.classList.remove("show");
    discContainer.classList.remove("show");
});


document.getElementById("uploadImage").addEventListener("change", function () {
    const fileList = this.files;
    const fileLabel = document.getElementById("fileLabel");
    const fileListElement = document.getElementById("fileList");
    fileListElement.innerHTML = "";

    if (fileList.length === 0) {
        fileLabel.textContent = "No Image Selected";
    } else {
        fileLabel.textContent = `${fileList.length} file(s) selected`;
        for (let i = 0; i < fileList.length; i++) {
            const listItem = document.createElement("li");
            listItem.textContent = fileList[i].name;

            const removeButton = document.createElement("button");
            removeButton.textContent = "Remove";
            removeButton.setAttribute("data-index", i);
            removeButton.addEventListener("click", function (event) {
                const index = parseInt(event.target.getAttribute("data-index"));
                removeFile(index);
            });

            listItem.appendChild(removeButton);
            fileListElement.appendChild(listItem);
        }
    }
});

function removeFile(index) {
    const fileInput = document.getElementById("uploadImage");
    const dataTransfer = new DataTransfer();

    const fileList = fileInput.files;
    for (let i = 0; i < fileList.length; i++) {
        if (i !== index) {
            dataTransfer.items.add(fileList[i]);
        }
    }

    fileInput.files = dataTransfer.files;

    // Trigger the change event to update the file list display
    const event = new Event("change");
    fileInput.dispatchEvent(event);
}