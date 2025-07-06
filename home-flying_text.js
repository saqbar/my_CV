document.addEventListener('DOMContentLoaded', function() {
    // Получаем все элементы, которые мы хотим анимировать
    const animatedWords = document.querySelectorAll('.animated-word');

    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5
    };

    const observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            // Если элемент видим (или стал видимым)
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, options);

    animatedWords.forEach(word => {
        observer.observe(word);
    });
});
