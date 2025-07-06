<?php

function loadTranslations($langCode) {
    $filePath = 'lang/' . $langCode . '.json';
    if (file_exists($filePath)) {
        $jsonString = file_get_contents($filePath);
        return json_decode($jsonString, true); // true для возврата ассоциативного массива
    } else {
        return null;
    }
}

// Получаем значение 'lang' из куки
$currentLang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : null;

$translations = null;

if ($currentLang) {
    $translations = loadTranslations($currentLang);
    if (!$translations) {
        $translations = loadTranslations('en');
    }
} else {
    $translations = loadTranslations('en');
}


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
