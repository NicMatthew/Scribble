const voucherBtn = document.getElementById("voucher-btn");
const modal = document.getElementById("modal");
const closeBtn = document.getElementById("close-btn");
const voucherSel = document.getElementById("voucher-title");
let selectedVouchers = [];

voucherBtn.addEventListener("click", (e) => {
    modal.classList.add("active");
});

closeBtn.addEventListener("click", (e) => {
    closeOverlay();
});

function closeOverlay() {
    modal.classList.remove("active");
}

const voucherList = document.querySelectorAll(".wrapper");

voucherList.forEach((voucher) => {
    voucher.addEventListener("click", (e) => {
        const voucherId = voucher.getAttribute("value");
        const voucherName = voucher.querySelector(".voucher-name").innerHTML;

        const alreadySelectedIndex = selectedVouchers.findIndex(v => v.id === voucherId);

        if (alreadySelectedIndex > -1) {
            // If the voucher is already selected, remove it from the selectedVouchers array
            selectedVouchers.splice(alreadySelectedIndex, 1);
            voucher.classList.remove("selected-voucher");
        } else if (selectedVouchers.length < 2) {
            // If the voucher is not selected and less than 2 vouchers are selected, add it to the array
            selectedVouchers.push({ id: voucherId, element: voucher });
            voucher.classList.add("selected-voucher");
        }

        // Update the voucher selection display
        voucherSel.innerHTML = selectedVouchers.map(v => v.element.querySelector(".voucher-name").innerHTML).join(", ");

        // Dim all vouchers except the selected ones
        voucherList.forEach((v) => {
            const vId = v.getAttribute("value");
            const isSelected = selectedVouchers.find(sv => sv.id === vId);
            if (!isSelected) {
                v.classList.add("dimmed-voucher");
            } else {
                v.classList.remove("dimmed-voucher");
            }
        });
    });
});

// Menutup overlay jika klik dilakukan di luar area voucher atau pada tombol close di dalam overlay
modal.addEventListener("click", (e) => {
    if (e.target === modal) {
        closeOverlay();
    }
});

let addressSelect = document.getElementById("address-select");
addressSelect.href = addressSelect.href + "?" + window.location.href.split("?")[1];