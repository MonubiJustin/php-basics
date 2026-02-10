<?php

$num1 = (int)readline("Enter num1: ");
$operation = readline("Enter (+, -, *, /): ");
$num2 = (int)readline("Enter num2: ");


switch ($operation){
    case "+":
        $result = $num1 + $num2;
        echo "$num1 + $num2 = $result\n";
        break;
    case "-":
        $result = $num1 - $num2;
        echo "$num1 - $num2 = $result\n";
        break;
    case "*":
        $result = $num1 * $num2;
        echo "$num1 * $num2 = $result\n";
        break;
    case "/":
        if ($num2 != 0){
        $result = $num1 / $num2;
        echo "$num1 / $num2 = $result\n";
        }
        else
            echo "Zero Division Error\n";
        break;
    default:
        echo "Invalid Operation\n";
}