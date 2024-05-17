
const modal = document.getElementById("modal-delete");
const btnOpen = document.getElementById("cancel-btn");
const btnKeepOrder = document.querySelector(".keep"); // Using querySelector to target the first matching element

// Open the modal when the button is clicked
btnOpen.addEventListener("click", function() {
  console.log("Button clicked!");
  modal.classList.remove("hidden"); // Remove the "hidden" class to show the modal
});

// Close the modal when the "Keep Order" button is clicked
btnKeepOrder.addEventListener("click", function() {
  modal.classList.add("hidden"); // Add the "hidden" class to hide the modal
});