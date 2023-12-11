// Header js
document.addEventListener("DOMContentLoaded", function () {
    console.log("DOM content loaded.");

    const burgerMenu = document.querySelector(".burger");
    const mobileMenu = document.querySelector(".mobile-menu");

    function closeMobileMenu() {
        burgerMenu.classList.remove("is-active");
        mobileMenu.classList.remove("is-active");
    }

    burgerMenu.addEventListener("click", function handleClick() {
        console.log("Burger menu clicked.");
        burgerMenu.classList.toggle("is-active");
        mobileMenu.classList.toggle("is-active");
    });

    window.addEventListener("resize", function handleResize() {
        const viewportWidth = window.innerWidth;

        // Adjust this threshold as needed
        const thresholdWidth = 1500;

        if (viewportWidth > thresholdWidth) {
            closeMobileMenu();
        }
    });
});