
var wishBtns = document.querySelectorAll(".wish")
var urlInput = document.getElementById("urlInput")

wishBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent the default form submission
        var img = btn.querySelector('img');
        if (img.src.includes("love-outline.svg")) {
            img.src = "/icons/love-fill.svg";
        } else {
            img.src = "/icons/love-outline.svg";
        }
        urlInput.value = document.URL;
        btn.closest('form').submit(); // Submit the form
    });
});
