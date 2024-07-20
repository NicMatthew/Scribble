const passed = window.location.href.split("?")[1].split("addressID=")[0]

//munculin overlay tambah alamat
const plusAddressImg = document.querySelector(
    '.header img[src="/icons/plus-address.svg"]'
);
const modal = document.getElementById("modal");

plusAddressImg.addEventListener("click", function () {
    modal.classList.add("active");
});

const cancelButton = document.querySelector(".cancel");
cancelButton.addEventListener("click", function () {
    modal.classList.remove("active");
});

const nextButtons = document.querySelectorAll('.right-address img[src="/icons/edit.svg"]');
let AddressID = document.getElementById('addressID');
const modalEdit = document.getElementById('modal-edit');
let UserID = document.getElementById("UserID");

nextButtons.forEach((nextButton) => {
    nextButton.addEventListener("click", function () {
        AddressID.value = nextButton.parentElement.id;
        document.forms["form-edit"].submit();
    });
});

//munculin overlay validasi mau apus ato engga
const exitAddressImgs = document.querySelectorAll('.right-address img[src="/icons/exit-address.svg"]');
const modalDelete = document.getElementById("modal-delete");
const addressID = document.getElementById("AddressID");
exitAddressImgs.forEach((exitImg) => {
    exitImg.addEventListener("click", function () {
        addressID.value = exitImg.parentElement.id
        modalDelete.classList.add("active");
    });
});

//keep address
const keepButton = document.querySelector('.keep');
keepButton.addEventListener("click", function () {
    modalDelete.classList.remove("active");
});

let addressActive = null;

const addressDivs = document.querySelectorAll(".address");

addressDivs.forEach(function (addressDiv) {
    addressDiv.addEventListener("click", (e) => {
        if (e.target != e.currentTarget && e.currentTarget != addressDiv.firstElementChild) {
            return
        }

        if (addressActive != null) {
            addressActive.classList.remove("active-border");
        }

        addressDiv.classList.add("active-border");
        addressActive = addressDiv;

        // Construct URL with query parameters
        const url = "/shipping?" + passed + "&addressID=" + addressDiv.id;

        // Redirect to the shipping page with query parameters
        window.location.href = url;
    })
})

document.getElementById("url").value = window.location.href;
