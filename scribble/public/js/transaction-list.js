const modal = document.getElementById("modal-delete");
const cancelBtns = document.querySelectorAll(".cancel-btn"); // Selects all elements

// Open the modal when any cancel button is clicked (loop through elements)
cancelBtns.forEach(btn => {
    btn.addEventListener("click", function() {
        console.log("Cancel button clicked!");
        modal.classList.remove("hidden");
    });
});

// Close the modal when the "Keep Order" button is clicked (unchanged)
const btnKeepOrder = document.querySelector(".keep");
btnKeepOrder.addEventListener("click", function() {
    modal.classList.add("hidden");
});