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
const AddressID = document.getElementById('AddressID');
const modalEdit = document.getElementById('modal-edit'); 

nextButtons.forEach((nextButton) => {
    nextButton.addEventListener("click", function () {
        AddressID.value = nextButton.parentElement.id; 
        modalEdit.classList.add("active");
    });
});

const cancelButtonEdit = document.querySelector(".cancel-edit");
cancelButtonEdit.addEventListener("click", function () {
    modalEdit.classList.remove("active");
});


//munculin overlay validasi mau apus ato engga
const exitAddressImgs = document.querySelectorAll('.right-address img[src="/icons/exit-address.svg"]');
const modalDelete = document.getElementById("modal-delete");
const addressID = document.getElementById("addressID");
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
const address = document.querySelectorAll('.address');
document.addEventListener("DOMContentLoaded", function () {
    var addressDivs = document.querySelectorAll(".address");

    addressDivs.forEach(function (addressDiv) {
        addressDiv.addEventListener("click", function () {
            if (addressActive != null) {
                addressActive.classList.remove("active-border")
            }
            this.classList.toggle("active-border");
            addressActive = this

            // var addressName = this.querySelector(".left-address p:nth-of-type(1)").textContent.trim();
            // var fullAddress = this.querySelector(".left-address p:nth-of-type(4)").textContent.trim();
            
            // // Store the selected address details in local storage
            // localStorage.setItem('selectedAddressName', addressName);
            // localStorage.setItem('selectedFullAddress', fullAddress);
        });
    });
});
