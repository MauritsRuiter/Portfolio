document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.head-btn');

    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            const targetId = link.getAttribute('data-target');
            const targetElement = document.getElementById(targetId);

            // Now you can use targetElement to scroll to the corresponding section
            console.log('Clicked on:', targetId);

            if (targetElement) {
                const targetOffsetTop = targetElement.offsetTop;
                window.scrollTo({
                    top: targetOffsetTop,
                    behavior: "smooth",
                });
            } else {
                console.error("Target element not found for ID:", targetId);
            }
        });
    });
});
