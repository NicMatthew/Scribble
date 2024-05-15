const plusAddressImg = document.querySelector(
    '.header img[src="/icons/plus-address.svg"]'
);
const modal = document.getElementById("modal");
plusAddressImg.addEventListener("click", function () {
    modal.classList.add("active");
});

const nextButtons = document.querySelectorAll(
    '.right-address img[src="/icons/next.svg"]'
);
// Tambahkan event listener untuk setiap tombol "Next"
nextButtons.forEach((nextButton) => {
    nextButton.addEventListener("click", function () {
        // Tampilkan modal
        document.getElementById("modal").classList.add("active");
    });
});
const cancelButton = document.querySelector(".cancel");
cancelButton.addEventListener("click", function () {
    modal.classList.remove("active");
});

// Ambil tombol "Exit Address"
const exitAddressImgs = document.querySelectorAll('.right-address img[src="/icons/exit-address.svg"]');
// Ambil elemen modal-delete
const modalDelete = document.getElementById("modal-delete");
// Tambahkan event listener untuk setiap tombol "Exit Address"
exitAddressImgs.forEach((exitImg) => {
    exitImg.addEventListener("click", function () {
        // Tampilkan modal-delete
        modalDelete.classList.add("active");
    });
});
// Ambil semua tombol "Cancel" di dalam modal-delete
const cancelButtons = document.querySelectorAll("#modal-delete .cancel");
// Tambahkan event listener untuk setiap tombol "Cancel"
cancelButtons.forEach((cancelButton) => {
    cancelButton.addEventListener("click", function () {
        // Sembunyikan modal-delete
        modalDelete.classList.remove("active");
    });
});
// Ambil tombol "Keep Address"
const keepButton = document.querySelector('.keep');
// Tambahkan event listener untuk tombol "Keep Address"
keepButton.addEventListener("click", function () {
    // Sembunyikan overlay-2
    modalDelete.classList.remove("active");
});
