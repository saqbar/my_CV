<?php

// Функция для загрузки JSON файла с переводами
function loadTranslations($langCode) {
    $filePath = 'lang/' . $langCode . '.json';
    if (file_exists($filePath)) {
        $jsonString = file_get_contents($filePath);
        return json_decode($jsonString, true); // true для возврата ассоциативного массива
    } else {
        return null; // Файл перевода не найден
    }
}

// Получаем значение 'lang' из куки
$currentLang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : null;

$translations = null;

if ($currentLang) {
    // Если куки 'lang' установлена, пытаемся загрузить соответствующий JSON
    $translations = loadTranslations($currentLang);
    if (!$translations) {
        // Если файл для языка из куки не найден, загружаем ro.json как запасной вариант
        $translations = loadTranslations('en');
//        echo "Предупреждение: Файл перевода для языка '" . htmlspecialchars($currentLang) . "' не найден. Загружен язык по умолчанию (ro).<br>";
    }
} else {
    // Если куки 'lang' не установлена, загружаем en.json
    $translations = loadTranslations('en');
//    echo "Языковая куки не найдена. Загружен язык по умолчанию (ro).<br>";
    // Можно также установить куки по умолчанию, например:
    // setcookie('lang', 'ro', time() + (86400 * 30), "/"); // Срок действия 30 дней
}

// Теперь переменная $translations содержит ассоциативный массив с переводами из куки (если есть и файл найден)
// или из ro.json (если куки нет или файл для куки не найден).

// Для демонстрации предположим, что файл lang/ro.json выглядит так:
/*
{
  "welcome": "Bun venit",
  "goodbye": "La revedere",
  "button_text": "Apasă-mă"
}
*/

// Пример использования:
// if ($translations) {
//     echo "<h1>" . ($translations['welcome'] ?? 'Welcome') . "</h1>";
//     echo "<button>" . ($translations['button_text'] ?? 'Click me') . "</button>";
//     echo "<p>" . ($translations['some_text'] ?? 'Default text') . "</p>";
// } else {
//     echo "Ошибка: Не удалось загрузить языковые файлы.";
// }

// ДЛЯ ВСТАВКИ: 
//  <?php echo ($translations['home'])
