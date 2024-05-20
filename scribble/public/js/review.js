document.addEventListener("DOMContentLoaded", function () {
    var stars = document.querySelectorAll(".stars img");
    stars.forEach(function (star, index) {
        star.addEventListener("click", function () {
            rateStar(index);
        });
    });

    function rateStar(selectedIndex) {
        // Mengatur bintang yang diklik dan semua bintang sebelumnya untuk diwarnai
        for (var i = 0; i <= selectedIndex; i++) {
            stars[i].src = "/icons/star-fill.svg";
        }
        // Mengatur bintang-bintang setelah bintang yang diklik untuk dikosongkan
        for (var j = selectedIndex + 1; j < stars.length; j++) {
            stars[j].src = "/icons/star-empty.svg";
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var input = document.getElementById("upload-photo");
    var preview = document.getElementById("photo-preview");
    var removeBtn = document.getElementById("remove-photo");

    input.addEventListener("change", function () {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function (event) {
                preview.src = event.target.result;
            };
            reader.readAsDataURL(file);
            preview.parentElement.style.display = "flex"; // Tampilkan container preview
        }
    });

    removeBtn.addEventListener("click", function () {
        preview.src = ""; // Hapus gambar dari tampilan
        input.value = ""; // Kosongkan nilai input file
        preview.parentElement.style.display = "none"; // Sembunyikan container preview
    });
});


