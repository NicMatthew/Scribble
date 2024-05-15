const plusAddressImg = document.querySelector(
    '.header img[src="/icons/plus-address.svg"]'
);
const modal = document.getElementById("modal");
plusAddressImg.addEventListener("click", function () {
    modal.classList.add("active");
});

const nextButton = document.querySelector(
    '.right-address img[src="/icons/next.svg"]'
);
nextButton.addEventListener("click", function () {
    modal.classList.add("active");
});


const cancelButton = document.querySelector(".cancel");
cancelButton.addEventListener("click", function () {
    modal.classList.remove("active");
});

