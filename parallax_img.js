document.addEventListener('DOMContentLoaded', function() {
    const gallerySection = document.querySelector('.gallery-section');
    const leftColumn = document.querySelector('.left-column');
    const rightColumn = document.querySelector('.right-column');

    // Проверяем, найдены ли элементы
    if (!gallerySection || !leftColumn || !rightColumn) {
        console.warn('Один или несколько элементов галереи не найдены. Анимация появления не будет работать.');
        return;
    }

    // Настройки для Intersection Observer
    const options = {
        root: null, // Отслеживаем видимость относительно viewport
        threshold: 0, // Наблюдаем за началом и концом видимости элемента
        // rootMargin: -50% 0px -50% 0px
        // Смещаем область наблюдения. Когда верхний край элемента доходит до 50% высоты viewport,
        // или когда нижний край элемента доходит до 50% высоты viewport.
        // Это означает, что isIntersecting станет true, когда галерея начнет пересекать середину viewport.
        rootMargin: `0px 0px -${window.innerHeight / 2}px 0px`
        // Этот rootMargin создаст область наблюдения, которая начинается на 50% высоты viewport.
        // Элемент будет считаться "пересекающим", когда его верхний край достигнет этой отметки.
    };

    const observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.target === gallerySection) {
                if (entry.isIntersecting) {
                    // Когда галерея достигла нужного порога видимости, добавляем класс
                    leftColumn.classList.add('is-visible');
                    rightColumn.classList.add('is-visible');
                    observer.unobserve(gallerySection); // Прекращаем наблюдение, чтобы анимация сработала только один раз
                }
            }
        });
    }, options);

    // Начинаем наблюдать за контейнером галереи
    observer.observe(gallerySection);
});
