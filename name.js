// Name animation Ctrl + a :) js
document.addEventListener("DOMContentLoaded", function () {
    const aboutMeName = document.querySelector(".about-me-name");
    const cursor = document.querySelector(".cursor"); // Add a cursor element to your HTML

    // Define multiple sets of text
    const textSets = [
        "Maurits Ruiter",
        "Web Developer & Designer",
        "Lorem Ipsum",
        // Add more text sets as needed
    ];

    function typeText(element, text, callback) {
        element.textContent = "";
        let currentIndex = 0;

        function typeNextLetter() {
            const letter = text[currentIndex];
            const span = document.createElement("span");
            span.textContent = letter;
            span.style.color = "inherit";
            element.appendChild(span);

            currentIndex++;

            if (currentIndex < text.length) {
                const randomDelay = Math.random() * 50 + 50;
                setTimeout(typeNextLetter, randomDelay);
            } else {
                if (typeof callback === "function") {
                    callback();
                }
            }
        }

        typeNextLetter();
    }

    function eraseText(element, callback) {
        // Remove all letters instantly without delay
        element.textContent = "";

        if (typeof callback === "function") {
            callback();
        }
    }

    function loopTextSets(index) {
        const currentText = textSets[index];

        typeText(aboutMeName, currentText, function () {
            cursor.style.display = "inline"; // Show cursor after typing

            setTimeout(function () {
                aboutMeName.style.backgroundColor = "#0078D7"; // Highlight text with a blue background
                cursor.style.display = "none"; // Hide cursor only when background is blue
                // Simulate backspacing to delete the text with a delay
                setTimeout(function () {
                    aboutMeName.style.backgroundColor = "transparent"; // Remove the background highlight

                    eraseText(aboutMeName, function () {
                        // Pause before starting the next typing sequence
                        setTimeout(function () {
                            // Simulate typing a new set of text after deleting
                            cursor.style.display = "inline-block"; // Show cursor before typing the next set
                            const nextIndex = (index + 1) % textSets.length;
                            loopTextSets(nextIndex); // Start typing the next set
                        }, 250); // Adjust the delay as needed
                    });
                }, 400); // Adjust the delay as needed
            }, 2000); // Adjust the delay as needed
        });
    }

    loopTextSets(0);
});