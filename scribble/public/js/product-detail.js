// const dropdownSortBtn = document.querySelector(".dropdown-sort");
// const dropdownContent = document.querySelector(".dropdown-sort-content");

// dropdownSortBtn.addEventListener("click", function () {
//     dropdownSortBtn.classList.toggle("active");
// });

const dropdownSortBtn = document.querySelector(".dropdown-sort");
const dropdownContent = document.querySelector(".dropdown-sort-content");

dropdownSortBtn.addEventListener("click", function () {
    dropdownSortBtn.classList.toggle("active");
    dropdownContent.classList.toggle("active");
});
