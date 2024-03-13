<?php
// Просим пользователя ввести номер месяца
$monthNumber = intval(readline("Введите номер месяца: "));

// Используем switch..case для определения времени года
switch ($monthNumber) {
    case 1:
    case 2:
    case 12:
        echo "Зима";
        break;
    case 3:
    case 4:
    case 5:
        echo "Весна";
        break;
    case 6:
    case 7:
    case 8:
        echo "Лето";
        break;
    case 9:
    case 10:
    case 11:
        echo "Осень";
        break;
    default:
        echo "Такого месяца нет";
}
?>



