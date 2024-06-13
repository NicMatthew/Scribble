const dropdownSortBtn = document.querySelector(".dropdown-sort");
const dropdownContent = document.querySelector(".dropdown-sort-content");
var sort = document.getElementsByClassName('sorting')

dropdownSortBtn.addEventListener("click", function () {
    dropdownSortBtn.classList.toggle("active");
});

var categories = document.getElementsByClassName("category_select");
var subcategories = document.getElementsByClassName("sub_category_select");
var sort = document.getElementsByClassName('sorting')
var form = document.getElementById("form_catalog")
var sortTitle = document.getElementById("sort_title")

categories = Array.prototype.slice.call(categories)
subcategories = Array.prototype.slice.call(subcategories);
sort = Array.prototype.slice.call(sort);

console.log(categories)

categories.forEach(category => {
    category.addEventListener("click", (e) => {
        form.children[0].setAttribute('value', category.innerHTML)
        form.children[1].setAttribute("value", "");
        document.forms["form_catalog"].submit();
        // console.log(category.innerHTML)
    })
});
subcategories.forEach((subcategory) => {
    subcategory.addEventListener("click", (e) => {
        form.children[1].setAttribute("value", subcategory.innerText);
        form.children[0].setAttribute("value", "");
        document.forms["form_catalog"].submit()
    });
});

sort.forEach((sorting) => {
    sorting.addEventListener("click", (e) => {
        form.children[3].setAttribute("value", sorting.innerText);
        sortTitle.innerHTML = sorting.innerText
        document.forms["form_catalog"].submit();
    });
});



