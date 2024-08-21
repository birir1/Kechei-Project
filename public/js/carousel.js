document.addEventListener('DOMContentLoaded', () => {
    const prevButton = document.querySelector('.carousel-control.prev');
    const nextButton = document.querySelector('.carousel-control.next');
    const carouselSlide = document.querySelector('.carousel-slide');
    const carouselItems = document.querySelectorAll('.carousel-item');

    let index = 0;

    function showSlide(i) {
        if (i >= carouselItems.length) {
            index = 0;
        } else if (i < 0) {
            index = carouselItems.length - 1;
        } else {
            index = i;
        }
        carouselSlide.style.transform = `translateX(-${index * 100}%)`;
    }

    prevButton.addEventListener('click', () => {
        showSlide(index - 1);
    });

    nextButton.addEventListener('click', () => {
        showSlide(index + 1);
    });

    // Optional: Auto-slide
    setInterval(() => {
        showSlide(index + 1);
    }, 5000); // Change slide every 5 seconds
});
