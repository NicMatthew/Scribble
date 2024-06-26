// document.querySelectorAll('.btn-quantity').forEach(button => {
//         button.addEventListener('click', function() {
//             let action = this.getAttribute('data-action');
//             let quantityInput = this.parentElement.querySelector('p');
//             let formInput = this.parentElement.children[3];
//             console.log(formInput)
//             let currentQuantity = parseInt(quantityInput.innerText);

//             if (action === 'minus') {
//                 if (currentQuantity > 1) {
//                     quantityInput.innerText = currentQuantity - 1;
//                     formInput.value = currentQuantity - 1;
//                 }
//             } else if (action === 'plus') {
//                 quantityInput.innerText = currentQuantity + 1;
//                  formInput.value = currentQuantity + 1;
//             }
//         });
// });

let summaryItemsContainer = document.getElementById("summaryItems");
let temp = summaryItemsContainer.firstElementChild

document.querySelectorAll(".btn-quantity").forEach((button) => {
    button.addEventListener("click", function () {
        let action = this.getAttribute("data-action");
        let quantityInput = this.parentElement.querySelector("p");
        let formInput = this.parentElement.querySelector(
            'input[name="quantity"]'
        );
        let currentQuantity = parseInt(quantityInput.innerText);
        let stock = parseInt(formInput.getAttribute("data-stock"));

        if (action === "minus") {
            if (currentQuantity > 1) {
                quantityInput.innerText = currentQuantity - 1;
                formInput.value = currentQuantity - 1;
            } else {
                quantityInput.innerText = 0; 
                formInput.value = 0; 
            }
        } else if (action === "plus") {
            if (currentQuantity < stock) {
                quantityInput.innerText = currentQuantity + 1;
                formInput.value = currentQuantity + 1;
            }
        }

        this.closest("form").submit();
    });
});
    
document.addEventListener("DOMContentLoaded", function () {
    // Memanggil fungsi updateSummary saat halaman dimuat untuk pertama kali
    updateSummary();
});

function updateSummary() {
    let summaryContainer = document.getElementById("summaryContainer");
    summaryItemsContainer = document.getElementById("summaryItems");
    console.log(summaryTotal)
    let selectedItems = document.querySelectorAll(
        'input[type="checkbox"]:checked'
    );
    let totalPrice = 0;

    summaryItemsContainer.innerHTML = ""; // Clear previous items

    selectedItems.forEach(function (item, index) {
        let productDetails = item.closest(".products");
        let productName = productDetails.querySelector(
            ".product-details p:last-of-type"
        ).textContent;
        let awalan = productDetails.querySelector(
            ".product-details p:first-of-type"
        ).textContent
        productName = awalan + " - " + productName.substring(7)
        let productPrice = productDetails
            .querySelector(".product-total-price p")
            .textContent.trim()
            .replace("Rp. ", "")
            .replace(/\./g, "")
            .replace(/,/g, "");
        let priceValue = parseInt(productPrice);
        totalPrice += priceValue;

        let formattedPrice = formatCurrency(priceValue);

        let newItem = document.createElement("div");
        newItem.classList.add("prices");
        newItem.innerHTML = `<p>${productName}</p><p>${formattedPrice}</p>`;
        summaryItemsContainer.appendChild(newItem);
    });

    summaryItemsContainer.appendChild(temp)

    let formattedTotalPrice = formatCurrency(totalPrice);

    summaryTotal.lastElementChild.innerText = `${formattedTotalPrice}`;

    if (selectedItems.length > 0) {
        summaryContainer.style.display = "block";
    } else {
        summaryContainer.style.display = "block"; // Tetap tampilkan summaryContainer
        // summaryItemsContainer.innerHTML = "<p>No items selected</p>"; // Tampilkan pesan default jika tidak ada item yang dipilih
        // summaryTotal.innerHTML = `<p>Total</p><p>Rp. 0</p>`; // Reset total harga
    }
}

function formatCurrency(value) {
    return ("Rp." + new Intl.NumberFormat("id-ID", { maximumFractionDigits: 0 }).format(value));
}






