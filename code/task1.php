<?php
function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Ошибка: Деление на ноль";
            }
        default:
            return "Ошибка: Неверная операция";
    }
}

// Примеры использования:
echo calculate(10, 5, '+') . "\n";  // Выведет 15
echo calculate(10, 5, '-') . "\n";  // Выведет 5
echo calculate(10, 5, '*') . "\n";  // Выведет 50
echo calculate(10, 5, '/') . "\n";  // Выведет 2
echo calculate(10, 0, '/') . "\n";  // Выведет "Ошибка: Деление на ноль"