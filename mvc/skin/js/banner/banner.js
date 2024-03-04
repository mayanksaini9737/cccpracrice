document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector('.banner-slider');
    let translateValue = 0;

    function slide(direction) {
        const step = 320; // Adjust the step size based on your design
        translateValue += direction * step;
        slider.style.transform = `translateX(${translateValue}px)`;
    }

    document.getElementById('prevButton').addEventListener('click', function() {
        slide(1);
    });

    document.getElementById('nextButton').addEventListener('click', function() {
        slide(-1);
    });
});