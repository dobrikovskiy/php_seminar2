<?php
// Устанавливаем временную зону для Москвы
date_default_timezone_set('Europe/Moscow');

// Функция для правильного склонения
function getCorrectWord($number, $one, $two, $five) {
    $number = $number % 100; // Учитываем только последние две цифры
    if ($number >= 11 && $number <= 19) {
        return $five;
    }
    $number = $number % 10;
    if ($number == 1) {
        return $one;
    }
    if ($number >= 2 && $number <= 4) {
        return $two;
    }
    return $five;
}

// Функция для получения текущего времени с правильными склонениями
function getCurrentTime() {
    $hours = date('H');
    $minutes = date('i');

    // Получаем правильные формы слов для часов и минут
    $hoursWord = getCorrectWord($hours, 'час', 'часа', 'часов');
    $minutesWord = getCorrectWord($minutes, 'минута', 'минуты', 'минут');

    return "$hours $hoursWord $minutes $minutesWord";
}

// Пример использования:
echo getCurrentTime();