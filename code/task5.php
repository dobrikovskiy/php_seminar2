<?php
function power($val, $pow) {
    // Базовый случай: любое число в степени 0 равно 1
    if ($pow == 0) {
        return 1;
    }
    // Если степень отрицательная
    if ($pow < 0) {
        return 1 / power($val, -$pow);
    }
    // Рекурсивный случай: умножаем число на результат функции с уменьшенной степенью
    return $val * power($val, $pow - 1);
}

// Примеры использования:
echo power(2, 3) . "\n";  // 2^3 = 8
echo power(5, 0) . "\n";  // 5^0 = 1
echo power(2, -2) . "\n"; // 2^-2 = 0.25