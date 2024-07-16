// const modal = document.getElementById("modal-delete");
// const cancelBtns = document.querySelectorAll(".cancel-btn"); // Selects all elements

// const modalproceed = document.getElementById("modal-proceed");
// const proceedBtns= document.querySelectorAll(".proceed-btn"); // Selects all elements

// // Open the modal when any cancel button is clicked (loop through elements)
// cancelBtns.forEach(btn => {
//     btn.addEventListener("click", function() {
//         console.log("Cancel button clicked!");
//         modal.classList.remove("hidden");
//     });
// });

// proceedBtns.forEach(btn => {
//     btn.addEventListener("click", function() {
//         console.log("Cancel button clicked!");
//         modalproceed.classList.remove("hidden");
//     });
// });


// // Close the modal when the "Keep Order" button is clicked (unchanged)
// const btnKeepOrder = document.querySelector(".keep");
// btnKeepOrder.addEventListener("click", function() {
//     modal.classList.add("hidden");
// });

// const btnKeepOrder2 = document.querySelector(".keep2");
// btnKeepOrder2.addEventListener("click", function() {
//     modalproceed.classList.add("hidden");
// });

 document.addEventListener("DOMContentLoaded", function () {
     const proceedButtons = document.querySelectorAll(".proceed-btn");
     const cancelButtons = document.querySelectorAll(".cancel-btn");

     const modalProceed = document.getElementById("modal-proceed");
     const modalCancel = document.getElementById("modal-delete");

     proceedButtons.forEach((button) => {
         button.addEventListener("click", function (event) {
             event.preventDefault();
             modalProceed.classList.remove("hidden");

             const proceedForm = this.closest("form");
             const keepButton = modalProceed.querySelector(".keep2");
             const proceedButton = modalProceed.querySelector(".btn-proceed");

             keepButton.onclick = () => modalProceed.classList.add("hidden");
             proceedButton.onclick = () => proceedForm.submit();
         });
     });

     cancelButtons.forEach((button) => {
         button.addEventListener("click", function (event) {
             event.preventDefault();
             modalCancel.classList.remove("hidden");

             const cancelForm = this.closest("form");
             const keepButton = modalCancel.querySelector(".keep");
             const cancelButton = modalCancel.querySelector(".btn-del");

             keepButton.onclick = () => modalCancel.classList.add("hidden");
             cancelButton.onclick = () => cancelForm.submit();
         });
     });
 });