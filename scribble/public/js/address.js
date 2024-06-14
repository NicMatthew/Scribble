//munculin overlay tambah alamat
const plusAddressImg = document.querySelector(
    '.header img[src="/icons/plus-address.svg"]'
);
const modal = document.getElementById("modal");
plusAddressImg.addEventListener("click", function () {
    modal.classList.add("active");
});

//munculin overlay edit alamat
const nextButtons = document.querySelectorAll(
    '.right-address img[src="/icons/edit.svg"]'
);
nextButtons.forEach((nextButton) => {
    nextButton.addEventListener("click", function () {
        document.getElementById("modal").classList.add("active");
    });
});
const cancelButton = document.querySelector(".cancel");
cancelButton.addEventListener("click", function () {
    modal.classList.remove("active");
});

//munculin overlay validasi mau apus ato engga
const exitAddressImgs = document.querySelectorAll('.right-address img[src="/icons/exit-address.svg"]');
const modalDelete = document.getElementById("modal-delete");
const addressID = document.getElementById("addressID")
exitAddressImgs.forEach((exitImg) => {
    exitImg.addEventListener("click", function () {
        addressID.value = exitImg.parentElement.id
        modalDelete.classList.add("active");
    });
});
// //cancel edit
// const cancelButtons = document.querySelectorAll("#modal-delete .cancel");
// cancelButtons.forEach((cancelButton) => {
//     cancelButton.addEventListener("click", function () {
//         modalDelete.classList.remove("active");
//     });
// });

//keep address
const keepButton = document.querySelector('.keep');
keepButton.addEventListener("click", function () {
    modalDelete.classList.remove("active");
});

let addressActive = null

//tanda addres kepilih
document.addEventListener("DOMContentLoaded", function () {
    var addressDivs = document.querySelectorAll(".address");

    addressDivs.forEach(function (addressDiv) {
        addressDiv.addEventListener("click", function () {
            if (addressActive != null) {
                addressActive.classList.remove("active-border")
            }
            this.classList.toggle("active-border");
            addressActive = this
        });
    });
});
