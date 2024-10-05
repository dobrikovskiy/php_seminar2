<?php
// Массив для транслитерации
$transliterationMap = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
    'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
    'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ы' => 'y',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'ь' => '', 'ъ' => ''
];

// Функция транслитерации строки
function transliterate($string, $transliterationMap) {
    // Приводим строку к нижнему регистру для работы с массивом
    $string = mb_strtolower($string);

    // Преобразуем каждый символ строки
    $transliteratedString = '';
    for ($i = 0; $i < mb_strlen($string); $i++) {
        $char = mb_substr($string, $i, 1);
        if (array_key_exists($char, $transliterationMap)) {
            $transliteratedString .= $transliterationMap[$char];
        } else {
            $transliteratedString .= $char; // Если символ не найден в массиве, оставляем его без изменений
        }
    }

    return $transliteratedString;
}

// Пример использования:
echo transliterate('Привет, мир!', $transliterationMap);  // Выведет "privet, mir!"