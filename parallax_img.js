document.addEventListener('DOMContentLoaded', function() {
    const gallerySection = document.querySelector('.gallery-section');
    const leftColumn = document.querySelector('.left-column');
    const rightColumn = document.querySelector('.right-column');

    if (!gallerySection || !leftColumn || !rightColumn) {
        console.warn('Один или несколько элементов галереи не найдены. Анимация появления не будет работать.');
        return;
    }

    const options = {
        root: null,
        threshold: 0,
        rootMargin: `0px 0px -${window.innerHeight / 2}px 0px`
    };

    const observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.target === gallerySection) {
                if (entry.isIntersecting) {
                    leftColumn.classList.add('is-visible');
                    rightColumn.classList.add('is-visible');
                    observer.unobserve(gallerySection);
                }
            }
        });
    }, options);

    observer.observe(gallerySection);
});
