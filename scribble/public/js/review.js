document.addEventListener("DOMContentLoaded", function () {
    var stars = document.querySelectorAll(".stars img");
    stars.forEach(function (star, index) {
        
        star.addEventListener("click", function () {
            star.parentElement.parentElement.children[1].value = index+1;
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

document.getElementById("submit-button").addEventListener('click', function () {
    var check = 0;
    textreview = document.querySelectorAll(".review-text");
    rating = document.querySelectorAll(".Rating-input");
    image = document.querySelectorAll(".Image-input");
    // console.log(textreview)
    rating.forEach((element) => {
        if (element.value == '') {
            check++;
        }
    });
    
    if (check != 0) {
        alert('Please fill all review form')
    } else {
        alert('mantap')
        // document.forms["form-submit"].submit();
    }
    
})

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".upload-input").forEach((input, index) => {
        var preview = document.getElementById(`photo-preview-${index}`);
        var removeBtn = document.getElementById(`remove-photo-${index}`);

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
});

document.addEventListener("DOMContentLoaded", function () {
    var reviewTextarea = document.querySelector(".review-text");
    var additionalClassDiv = document.querySelector(".additional-class");

    reviewTextarea.addEventListener("focus", function () {
        additionalClassDiv.style.display = "none";
    });

    reviewTextarea.addEventListener("input", function () {
        additionalClassDiv.style.display = "none";
    });
});


