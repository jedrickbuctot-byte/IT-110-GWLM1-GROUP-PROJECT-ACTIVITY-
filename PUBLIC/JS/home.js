
// GRAY BREW HOME PAGE CAROUSEL

document.addEventListener('DOMContentLoaded', function () {

    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.dot');

    const previous = document.getElementById('prevSlide');
    const next = document.getElementById('nextSlide');

    if (!slides.length) return;

    let currentSlide = 0;
    let slideTimer;

    function showSlide(index) {

        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        currentSlide = (index + slides.length) % slides.length;

        slides[currentSlide].classList.add('active');

        if (dots[currentSlide]) {
            dots[currentSlide].classList.add('active');
        }
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function previousSlide() {
        showSlide(currentSlide - 1);
    }

    function startAutoSlide() {
        clearInterval(slideTimer);
        slideTimer = setInterval(nextSlide, 5000);
    }

    next.addEventListener('click', function () {
        nextSlide();
        startAutoSlide();
    });

    previous.addEventListener('click', function () {
        previousSlide();
        startAutoSlide();
    });

    dots.forEach(dot => {
        dot.addEventListener('click', function () {
            showSlide(Number(this.dataset.slide));
            startAutoSlide();
        });
    });

    showSlide(0);
    startAutoSlide();

});