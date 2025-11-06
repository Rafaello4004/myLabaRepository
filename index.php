<?php
class Calculator {
    private $num1;
    private $num2;
    
    public function __construct() {
        $this->num1 = 0;
        $this->num2 = 0;
    }
    
    public function displayMenu() {
        echo "1. Ввести два числа\n";
        echo "2. Выполнить сложение\n";
        echo "3. Выполнить вычитание\n";
        echo "4. Выполнить деление\n";
        echo "5. Возвести число в степень\n";
        echo "6. Выход\n";
        echo "Выберите пункт меню: ";
    }
    
    public function inputNumbers() {
        echo "Введите первое число: ";
        $this->num1 = (float) trim(fgets(STDIN));

        echo "Введите второе число: ";
        $this->num2 = (float) trim(fgets(STDIN));
        
        echo "Числа сохранены: {$this->num1} и {$this->num2}\n";
    }
    
    public function getNumbers() {
        return [$this->num1, $this->num2];
    }
}

function main() {
    $calculator = new Calculator();
    $choice = 0;
    
    while ($choice != 6) {
        $calculator->displayMenu();
        $choice = (int) trim(fgets(STDIN));
        
        switch ($choice) {
            case 1:
                $calculator->inputNumbers();
                break;
            case 2:
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
}

main();
?>