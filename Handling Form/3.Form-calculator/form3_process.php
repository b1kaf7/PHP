<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];

switch ($operation) {
    case "add":
        $result = $num1 + $num2;
        break;
    case "sub":
        $result = $num1 - $num2;
        break;
    case "mul":
        $result = $num1 * $num2;
        break;
    case "div":
        $result = $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
        break;
    default:
        $result = "Invalid operation";
}

echo "Result: $result";
