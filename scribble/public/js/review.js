// Get a reference to our file input
const fileInput = document.querySelectorAll('input[type="file"]');

// Create a new File object
const myFile = new File(["Hello World!"], "myFile.txt", {
    type: "text/plain",
    lastModified: new Date(),
});

// Now let's create a DataTransfer to get a FileList
const dataTransfer = new DataTransfer();
dataTransfer.items.add(myFile);
fileInput.forEach(function (element) {
    element.files = dataTransfer.files;
});


document.addEventListener("DOMContentLoaded", function () {
    var stars = document.querySelectorAll(".stars img");
    var stars_count = stars.length;
    stars.forEach(function (star, index) {
        star.addEventListener("click", function () {
            let count = index % 5;
            star.parentElement.parentElement.children[1].value = count + 1;
            console.log(count+1);
            rateStar(index, stars_count);
        });
    });

    function rateStar(selectedIndex, stars_count) {
        let index = 0
        
        for (counter = 0; counter <= stars_count / 5; counter += 1) {
            if (5 * counter > selectedIndex) {
                index = counter - 1
                break
            }
        }
        // alert(counter);
        // Mengatur bintang yang diklik dan semua bintang sebelumnya untuk diwarnai
        for (var i = index*5; i <= selectedIndex; i++) {
            stars[i].src = "/icons/star-fill.svg";
        }
        // Mengatur bintang-bintang setelah bintang yang diklik untuk dikosongkan
        for (var j = selectedIndex + 1; j < (index+1)*5; j++) {
            stars[j].src = "/icons/star-empty.svg";
        }
    }
});
const modal = document.getElementById("modal");
const message = document.getElementById("message-container");
document.getElementById("submit-button").addEventListener("click", function () {
    var check = 0;
    textreview = document.querySelectorAll(".review-text");
    rating = document.querySelectorAll(".Rating-input");
    image = document.querySelectorAll(".Image-input");
    // console.log(textreview)
    rating.forEach((element) => {
        if (element.value == "") {
            check++;
        }
        // check++;
        // console.log(element.value)
    });

    if (check != 0) {
        modal.classList.add("active");
        message.classList.add("active");
    } else {
        // alert('mantap')
        document.forms["form-submit"].submit();
    }
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".upload-input").forEach((input, index) => {
        var preview = document.getElementById(`photo-preview-${index}`);
        var removeBtn = document.getElementById(`remove-photo-${index}`);

        input.addEventListener("change", function () {
            var file = this.files[0];
            if (file) {
                input.parentElement.firstElementChild.value = 1;
                var reader = new FileReader();
                reader.onload = function (event) {
                    preview.src = event.target.result;
                };
                reader.readAsDataURL(file);
                preview.parentElement.style.display = "flex"; // Tampilkan container preview

            }
        });
        

        removeBtn.addEventListener("click", function () {
            input.parentElement.firstElementChild.value = 0;
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


document.getElementById("cancel-btn").addEventListener("click", (e) => {
    modal.classList.remove("active");
    message.classList.remove("active");
});