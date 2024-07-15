const modal = document.getElementById("modal-delete");
const cancelBtns = document.querySelectorAll(".cancel-btn"); // Selects all elements
const transactionID = document.getElementById('TransactionID')

// Open the modal when any cancel button is clicked (loop through elements)
cancelBtns.forEach(btn => {
    btn.addEventListener("click", function() {
        console.log("Cancel button clicked!");
        transactionID.value = btn.getAttribute('value')
        // console.log(transactionID.value)

        modal.classList.remove("hidden");
    });
});

// Close the modal when the "Keep Order" button is clicked (unchanged)
const btnKeepOrder = document.querySelector(".keep");
btnKeepOrder.addEventListener("click", function() {
    modal.classList.add("hidden");
});

const btnCancelOrder = document.querySelector(".btn-del");
btnCancelOrder.addEventListener("click", function () {
    document.forms['TransactionDelete'].submit()
});