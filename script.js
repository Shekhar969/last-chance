


document.addEventListener('DOMContentLoaded', () => {
    const noButton = document.getElementById('no');
    const yesButton = document.getElementById('yes');

    noButton.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent form submission

        // Get the button's current position
        const rect = noButton.getBoundingClientRect();

        // Generate new random position
        const newLeft = Math.floor(Math.random() * (window.innerWidth - rect.width));
        const newTop = Math.floor(Math.random() * (window.innerHeight - rect.height));

        // Apply new position
        noButton.style.position = 'absolute';
        noButton.style.left = `${newLeft}px`;
        noButton.style.top = `${newTop}px`;
    });

    yesButton.addEventListener('click', (event) => {
        event.preventDefault(); 
        window.location.href = 'Ag.html';
    });
});

const slides = document.querySelector('.slides');
let currentIndex = 0;

function updateSlider() {
    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}

setInterval(() => {
    currentIndex = (currentIndex + 1) % slides.children.length;
    updateSlider();
}, 3000); // Change image every 3 seconds
