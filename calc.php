<?php

function add($num1, $num2){
    return $num1 + $num2;
}

function sub($num1, $num2){
    return $num1 - $num2;
}

function mul($num1, $num2){
    return $num1 * $num2;
}

function div($num1, $num2){
    if ($num2 != 0){
        return $num1 / $num2;
    }
    return null;
}

$flag = true;
while ($flag) {
    $num1 = (float)readline("Enter num1: ");
    $operation = readline("Enter (+, -, *, /): ");
    $num2 = (float)readline("Enter num2: ");


    switch ($operation) {
        case "+":
            $result = add($num1, $num2);
            echo "$num1 + $num2 = $result\n";
            break;
        case "-":
            $result = sub($num1, $num2);
            echo "$num1 - $num2 = $result\n";
            break;
        case "*":
            $result = mul($num1, $num2);
            echo "$num1 * $num2 = $result\n";
            break;
        case "/":
            $result = div($num1, $num2);
            if ($result != null)
                echo "$num1 / $num2 = $result\n";
            else
                echo "Zero Division Error\n";
            break;
        default:
            echo "Invalid Operation\n";
    }

    $option = readline("enter 1 to continue, otherwise press anything else to quit:  \n");
    $flag = $option == "1" ? true : false;
    echo "\n";
}
