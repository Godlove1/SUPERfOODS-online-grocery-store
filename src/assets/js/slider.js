const mainImage = document.getElementById("main-image");
const getImages = document.querySelectorAll(".product__image");

getImages.forEach((image) => {
    image.addEventListener("click", (event) => {
        mainImage.src = event.target.src;

        document
            .querySelector(".product__image--active")
            .classList.remove("product__image--active");

        event.target.classList.add("product__image--active");
    });
});
