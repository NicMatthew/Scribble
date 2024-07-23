// get data from laravel
variants = variants

// set sesuai variant
const carousel = document.querySelector(".carousel"), arrowIcons = document.querySelectorAll(".wrapper i");
const priceDisplay = document.getElementById("price-display")
let variantOpt = document.querySelectorAll(".variantOpt")
const mainPhoto = document.getElementById("main-photo")
const quantityDisp = document.getElementById("quantity-display")
const plusBtn = document.getElementById("plus-btn")
const minusBtn = document.getElementById("minus-btn")
const availableDisp = document.getElementById("available-quan-disp")
const productDesc = document.getElementById("product-desc")
let quanInput = document.getElementById("quantity-input")
let quanInput2 = document.getElementById("quantity-input-2");
let variantInput = document.getElementById("variant-input")
let variantInput2 = document.getElementById("variant-input-2");
let priceInput = document.getElementById("price-input")
let priceInput2 = document.getElementById("price-input-2");
let selectedVariant = -1;
let hideCounter = 0;
let lastQuantity = 0;

variants.forEach(variant => {
    let image = document.createElement("img")
    image.src = variant.Image

    carousel.appendChild(image)
});

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function setVariant(idx, varID) {
    if (selectedVariant != -1) {
        variantOpt[selectedVariant].classList.remove("selected-variant")
    }

    console.log(idx)
    if (variants[idx].Stock == 0) {
        document.getElementById("add-to-cart-btn").style = "text-decoration: none; padding: 20px 25px; border-radius: 15px; display:flex; flex-direction: row; align-items:center; cursor: not-allowed; background-color: #bdbdbd;"
        document.getElementById("buy-now-btn").style = "text-decoration: none; padding: 20px 25px; border-radius: 15px; display:flex; flex-direction: row; align-items:center; cursor: not-allowed; background-color: #bdbdbd;"
    } else {
        document.getElementById("add-to-cart-btn").style = "text-decoration: none; padding: 20px 25px; border-radius: 15px; display:flex; flex-direction: row; align-items:center; cursor: pointer;"
        document.getElementById("buy-now-btn").style = "text-decoration: none; padding: 20px 25px; border-radius: 15px; display:flex; flex-direction: row; align-items:center; cursor: pointer;"
    }

    priceInput.value = variants[idx].Price
    priceInput2.value = variants[idx].Price;
    priceDisplay.innerText = "Rp. " + numberWithCommas(variants[idx].Price)
    mainPhoto.firstChild.src = variants[idx].Image
    variantOpt[idx].classList.add("selected-variant")
    availableDisp.innerText = variants[idx].Stock + " pieces available"
    quantityDisp.innerText = 1
    selectedVariant = idx
    lastQuantity = variants[idx].Stock
    setQuantity(0)

    variantInput.setAttribute("value", varID)
    variantInput2.setAttribute("value", varID);
}

let tempVar = null
for (let i = variantOpt.length-1; i >= 0; i--) {
    if (tempVar == variantOpt[i].innerText) {
        variantOpt[i].style = "font-family:helvetica; text-decoration: none; padding: 12px 20px; border-radius: 15px; display:none; flex-direction: row; align-items:center;"
        hideCounter++
    } else {
        tempVar = variantOpt[i].innerText
    }
}

if (variantOpt.length - 1 == hideCounter) {
    document.getElementById("variant-container").style = "display: none"
}

variantOpt = document.querySelectorAll(".variantOpt")
if (!variantOpt[0].classList.contains("selected-variant")) {
    variantOpt[0].classList.add("selected-variant")
}


for (let i = 0; i < variantOpt.length; i++) {
    variantOpt[i].addEventListener("click", (e)=>{
        varId = null;

        variants.forEach(variant => {
            if (variant.VariantName == variantOpt[i].firstElementChild.innerText) {
                varId = variant.VariantID
            }
        });
        setVariant(i, varId)
        console.log(i, varId)
    })
}

setVariant(0, variants[0].VariantID)

// quantity adjust
function setQuantity(val) {
    currQuantity = parseInt(quantityDisp.innerText)
    if (currQuantity+val > 0 && currQuantity+val <= variants[selectedVariant].Stock) {
        quanInput.setAttribute("value", parseInt(quantityDisp.innerText) + val);
        quanInput2.setAttribute("value", parseInt(quantityDisp.innerText) + val);
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

if (dropdownFilterBtn) {
    dropdownFilterBtn.addEventListener("click", function () {
        dropdownFilterBtn.classList.toggle("active");
    });
}

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
        showHideIcons()
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
        toggleArrowVisibility()
    })
});

const dragStart2 = (e) => {
    isDragging2 = true;
    carousel2.classList.add("dragging2");
    startX2 = e.pageX;
    startScrollLeft2 = carousel2.scrollLeft;
    toggleArrowVisibility()
}

const dragging2 = (e) => {
    if (!isDragging2) return;
    carousel2.scrollLeft = startScrollLeft2 - (e.pageX - startX2);
    toggleArrowVisibility()
}

const dragStop2 = () => {
    isDragging2 = false;
    carousel2.classList.remove("dragging2");
    toggleArrowVisibility()
};

function toggleArrowVisibility() {
    const scrollLeft = carousel2.scrollLeft;
    const scrollWidth = carousel2.scrollWidth;
    const clientWidth = carousel2.clientWidth;

    // Show/hide left arrow
    if (scrollLeft === 0) {
        document.getElementById("left-2").style.display = "none";
    } else {
        document.getElementById("left-2").style.display = "block";
    }

    // Show/hide right arrow
    if (scrollLeft + clientWidth >= scrollWidth) {
        document.getElementById("right-2").style.display = "none";
    } else {
        document.getElementById("right-2").style.display = "block";
    }
}
toggleArrowVisibility()

carousel2.addEventListener("mousedown", dragStart2);
carousel2.addEventListener("mousemove", dragging2);
document.addEventListener("mouseup", dragStop2);


document.addEventListener("DOMContentLoaded", function () {
    const addToCartBtn = document.getElementById("add-to-cart-btn");

    addToCartBtn.addEventListener("click", function (e) {
        e.preventDefault(); // Mencegah tindakan default dari anchor link

        if (lastQuantity == 0) {
            return
        }
        // Memeriksa status login pengguna dari elemen data

        document.forms["add-to-cart-form"].submit();
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const buyNowBtn = document.getElementById("buy-now-btn");

    buyNowBtn.addEventListener("click", function (e) {
        e.preventDefault(); // Mencegah tindakan default dari anchor link

        if (lastQuantity == 0) {
            return
        }

        document.forms["buy-now-form"].submit();
    });
});

showHideIcons()

document.addEventListener('DOMContentLoaded', function() {
    // Select all list items within .dropdown-filter-content
    var listItems = document.querySelectorAll('.dropdown-filter-content li');

    // Attach click event listener to each list item
    listItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var selectedStar = item.getAttribute('data-star');

            // Update sortText based on selected star
            if (selectedStar === "all") {
                document.getElementById('sortText').textContent = "All reviews";
                document.getElementById('sortIcon').style.display = 'none'; // Hide star icon
            } else {
                document.getElementById('sortText').textContent = selectedStar + ' Star';
                document.getElementById('sortIcon').src = '/icons/star.svg'; // Show star icon
                document.getElementById('sortIcon').style.display = 'inline'; // Ensure star icon is visible
            }


            // Update sortIcon
            document.getElementById('sortIcon').src = '/icons/star.svg'; // Assuming star.svg is your star icon

            // Hide or show reviews based on selected star rating
            var reviews = document.querySelectorAll('.review');
            reviews.forEach(function(review) {
                var reviewRating = review.getAttribute('data-rating');

                // Toggle visibility based on selected star rating or "all"
                if (selectedStar === reviewRating || selectedStar === 'all') {
                    review.style.display = 'block';
                } else {
                    review.style.display = 'none';
                }
            });
        });
    });
});
