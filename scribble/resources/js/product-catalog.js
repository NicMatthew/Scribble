console.log("Product Catalog JS Loaded!");
const dropdownSortBtn = document.querySelector('.dropdown-sort'); // Select the button element
const dropdownContent = document.querySelector('.dropdown-sort-content'); // Select the content element

dropdownSortBtn.addEventListener('click', function() {
  dropdownContent.classList.toggle('show'); // Toggle visibility using class
});