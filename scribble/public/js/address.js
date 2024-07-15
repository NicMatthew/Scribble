const passed = window.location.href.split("?")[1]

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
// let AddressID = document.getElementById("AddressID")
let UserID = document.getElementById("UserID");
// console.log(AddressID);

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

let addressActive = null;

const addressDivs = document.querySelectorAll(".address");

addressDivs.forEach(function (addressDiv) {
    addressDiv.addEventListener("click", (e) => {
        if (e.target.closest(addressDiv)) {
            if (addressActive != null) {
                addressActive.classList.remove("active-border");
            }

            this.classList.add("active-border");
            addressActive = this;

            const addressName = this.querySelector(".left-address p:nth-of-type(1)").textContent.trim();
            const fullAddress = this.querySelector(".left-address p:nth-of-type(4)").textContent.trim();

            // Encode addressName and fullAddress to be used in URL
            const encodedAddressName = encodeURIComponent(addressName);
            const encodedFullAddress = encodeURIComponent(fullAddress);

            // Construct URL with query parameters
            const url = `/shipping?selectedAddressName=${encodedAddressName}&selectedFullAddress=${encodedFullAddress}` + "&" + passed + "&addressID=" + addressDiv.id;

            // Redirect to the shipping page with query parameters
            window.location.href = url;
        }
    });
});

document.getElementById("url").value = window.location.href;
