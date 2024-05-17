const dropdownFilterBtn = document.querySelector(".dropdown-filter");
const dropdownContent = document.querySelector(".dropdown-filter-content");

dropdownFilterBtn.addEventListener("click", function () {
    dropdownFilterBtn.classList.toggle("active");
});

const carousel = document.querySelector(".carousel"),
    firstImg = carousel.querySelectorAll("img")[0];
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false,
    prevPageX,
    prevScrollLeft;

const showHideIcons = () => {
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth;
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display =
        carousel.scrollLeft == scrollWidth ? "none" : "block";
};

arrowIcons.forEach((icon) => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 7;
        carousel.scrollLeft +=
            icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60);
    });
});

const dragStart = (e) => {
    isDragStart = true;
    prevPageX = e.pageX;
    prevScrollLeft = carousel.scrollLeft;
};

const dragging = (e) => {
    if (!isDragStart) return;
    e.preventDefault();
    carousel.classList.add("dragging");
    let positionDiff = e.pageX - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
};

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");
};

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
carousel.addEventListener("mouseup", dragStop);

// Mengambil elemen gambar utama dan carousel
const mainPhoto = document.querySelector('.left-photo .main');
const carouselImages = document.querySelectorAll('.left-photo .carousel img');

// Menetapkan gambar pertama sebagai gambar default di dalam elemen main
const firstImageUrl = carouselImages[0].getAttribute('src');
mainPhoto.innerHTML = `<img src="${firstImageUrl}" alt="img">`;

// Menambahkan event listener untuk setiap gambar dalam carousel
carouselImages.forEach(image => {
    image.addEventListener('click', () => {
        // Mendapatkan sumber gambar dari gambar yang diklik
        const imageUrl = image.getAttribute('src');
        // Mengatur gambar utama sesuai dengan gambar yang diklik
        mainPhoto.innerHTML = `<img src="${imageUrl}" alt="img">`;
    });
});