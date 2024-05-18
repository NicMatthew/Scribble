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


//carousel bawah
const carousel2 = document.querySelector(".carousel-2");
const arrowBtns = document.querySelectorAll(".wrapper-2 i");
const firstCardWidth = carousel2.querySelector(".card").offsetWidth;

let isDragging2 = false, startX2, startScrollLeft2;

arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel2.scrollLeft += btn.id === "left-2" ? -firstCardWidth : firstCardWidth;
    })
});

const dragStart2 = (e) => {
    isDragging2 = true;
    carousel2.classList.add("dragging2");
    startX2 = e.pageX;
    startScrollLeft2 = carousel2.scrollLeft;
}

const dragging2 = (e) => {
    if (!isDragging2) return;
    carousel2.scrollLeft = startScrollLeft2 - (e.pageX - startX2);
}

const dragStop2 = () => {
    isDragging2 = false;
    carousel2.classList.remove("dragging2");
};

carousel2.addEventListener("mousedown", dragStart2);
carousel2.addEventListener("mousemove", dragging2);
document.addEventListener("mouseup", dragStop2);
