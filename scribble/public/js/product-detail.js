// get data from laravel
variants = variants

// set sesuai variant
const carousel = document.querySelector(".carousel"), arrowIcons = document.querySelectorAll(".wrapper i");
const priceDisplay = document.getElementById("price-display")
const variantOpt = document.querySelectorAll(".variantOpt")
const mainPhoto = document.getElementById("main-photo")
const quantityDisp = document.getElementById("quantity-display")
const plusBtn = document.getElementById("plus-btn")
const minusBtn = document.getElementById("minus-btn")
const availableDisp = document.getElementById("available-quan-disp")
const productDesc = document.getElementById("product-desc")
let selectedVariant = -1;

variants.forEach(variant => {
    let image = document.createElement("img")
    image.src = variant.Image

    carousel.appendChild(image)
});

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function setVariant(idx) {
    if (selectedVariant != -1) {
        variantOpt[selectedVariant].classList.remove("selected-variant")
    }

    priceDisplay.innerText = "Rp. " + numberWithCommas(variants[idx].Price)
    mainPhoto.firstChild.src = variants[idx].Image
    variantOpt[idx].classList.add("selected-variant")
    availableDisp.innerText = variants[idx].Stock + " pieces available"
    quantityDisp.innerText = 1
    productDesc.innerText = variants[idx].DescriptionVariant
    selectedVariant = idx
}

for (let i = 0; i < variantOpt.length; i++) {
    variantOpt[i].addEventListener("click", (e)=>{
        setVariant(i)
    })
}

setVariant(0)

// quantity adjust
function setQuantity(val) {
    currQuantity = parseInt(quantityDisp.innerText)
    if (currQuantity+val > 0 && currQuantity+val <= variants[selectedVariant].Stock) {
        quantityDisp.innerText = parseInt(quantityDisp.innerText) + val
    }
}

plusBtn.addEventListener("click", (e)=>{
    setQuantity(1)
})

minusBtn.addEventListener("click", (e)=>{
    setQuantity(-1)
})

const dropdownFilterBtn = document.querySelector(".dropdown-filter");
const dropdownContent = document.querySelector(".dropdown-filter-content");

dropdownFilterBtn.addEventListener("click", function () {
    dropdownFilterBtn.classList.toggle("active");
});

let isDragStart = false,
    prevPageX,
    prevScrollLeft;

let firstImg = carousel.children[0]

const showHideIcons = () => {
    // let scrollWidth = carousel.scrollWidth - carousel.clientWidth;
    // arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    // arrowIcons[1].style.display =
    //     carousel.scrollLeft == scrollWidth ? "none" : "block";
    arrowIcons[0].style.display = carousel.scrollLeft <= 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft >= (carousel.scrollWidth - carousel.clientWidth) ? "none" : "block";
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
