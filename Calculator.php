<?php

do{
    $num1 = readline("Enter 1st no.: ");
    $num2 = readline("Enter 2nd no: ");
    echo "\n";
    echo "Enter 1 for addition".PHP_EOL;
    echo "Enter 2 for subtraction".PHP_EOL;
    echo "Enter 3 for multiplication".PHP_EOL;
    echo "Enter 4 for division".PHP_EOL;
    echo "\n";
    $choice = readline("Enter your choice: ");
    echo "\n";

    switch($choice){
        case '1':
            $sum = $num1 + $num2;
            echo "Addition of two numbers is $sum".PHP_EOL;
            echo "\n";
            break;
        case '2':
            $sub = $num1 - $num2;
            echo "Subtraction of two numbers is $sub".PHP_EOL;
            echo "\n";
            break;
        case '3':
            $mul = $num1 * $num2;
            echo "Multiplication of two numbers is $mul".PHP_EOL;
            echo "\n";
            break;
        case '4':
            $div = $num1 / $num2;
            echo "Division of two numbers is $div".PHP_EOL;
            echo "\n";
            break;
         case '5':
            echo "Thank You".PHP_EOL;
            echo "\n";
            break;
        default:
            echo "Enter correct value".PHP_EOL;
            echo "\n";
            echo "\n";
            break;    
    }

}while($choice != '5');

?>