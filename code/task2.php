<?php
// Функции для арифметических операций
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        return "Ошибка: Деление на ноль";
    }
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'add':
            return add($arg1, $arg2);
        case 'subtract':
            return subtract($arg1, $arg2);
        case 'multiply':
            return multiply($arg1, $arg2);
        case 'divide':
            return divide($arg1, $arg2);
        default:
            return "Ошибка: Неверная операция";
    }
}

// Примеры использования:
echo mathOperation(10, 5, 'add') . "\n";       // Выведет 15
echo mathOperation(10, 5, 'subtract') . "\n";  // Выведет 5
echo mathOperation(10, 5, 'multiply') . "\n";  // Выведет 50
echo mathOperation(10, 5, 'divide') . "\n";    // Выведет 2
echo mathOperation(10, 0, 'divide') . "\n";    // Выведет "Ошибка: Деление на ноль"