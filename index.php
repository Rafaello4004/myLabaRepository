<?php
var $num1, $num2;
$choice = 0;

while (true) 
{
    echo "1. Ввести два числа\n";
    echo "2. Выполнить сложение\n";
    echo "3. Выполнить вычитание\n";
    echo "4. Выполнить деление\n";
    echo "5. Возвести число в степень\n";
    echo "6. Выход\n";
    $choice = (int)readline("Введите свой выбор: ");
    
    switch ($choice) 
    {
        case 1:
            $num1 = (float)readline("Введите первое число: ");                
            $num2 = (float)readline("Введите второе число: ");
            
            echo "Числа сохранены: {$num1} и {$num2}\n";
            break;
        case 2:
            echo "Результат сложения: {$num1 + $num2}\n";
            break;
        case 3:
        case 4:
        case 5:
            echo "Функционал будет реализован в соответствующих ветках\n";
            break;
        case 6:
            echo "Выход из программы.\n";
            break;
        default:
            echo "Неверный выбор. Попробуйте снова.\n";
    }
}
?>