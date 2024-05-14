document.addEventListener("DOMContentLoaded", function () {
    const plusAddressImg = document.querySelector(
        '.header img[src="/icons/plus-address.svg"]'
    );
    const overlay = document.querySelector(".overlay");

    plusAddressImg.addEventListener("click", function () {
        overlay.classList.add("active");
    });
});
