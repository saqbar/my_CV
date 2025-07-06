document.addEventListener('DOMContentLoaded', function() {
    // Получаем все элементы, которые мы хотим анимировать
    const animatedWords = document.querySelectorAll('.animated-word');

    // Настройки для Intersection Observer
    const options = {
        root: null, // null означает, что мы отслеживаем видимость относительно viewport (окна браузера)
        rootMargin: '0px', // Отступы вокруг viewport
        threshold: 0.5 // Порог: 50% элемента должно быть видно, чтобы сработало
    };

    // Создаем новый Intersection Observer
    const observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            // Если элемент видим (или стал видимым)
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible'); // Добавляем класс для активации анимации
                observer.unobserve(entry.target); // Прекращаем наблюдение за этим элементом, так как он уже анимирован
            }
        });
    }, options);

    // Начинаем наблюдать за каждым анимированным словом
    animatedWords.forEach(word => {
        observer.observe(word);
    });
});
