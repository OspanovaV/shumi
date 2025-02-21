document.addEventListener("DOMContentLoaded", function () {
    const burgerButton = document.getElementById("burgerButton");
    const menuWrapper = document.getElementById("menuWrapper");

    burgerButton.addEventListener("click", function () {
        menuWrapper.classList.toggle("show");
    });

    // Close the menu when clicking outside it
    document.addEventListener("click", function (event) {
        if (!menuWrapper.contains(event.target) && !burgerButton.contains(event.target)) {
            menuWrapper.classList.remove("show");
        }
    });
});