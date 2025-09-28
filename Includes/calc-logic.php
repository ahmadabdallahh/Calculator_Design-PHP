<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numberOne = $_POST["num-1"];
    $numberTwo = $_POST["num-2"];
    $operation = $_POST["operation"];

    // The error here is:
    // 1. The case value is 'Add', but the form sends 'add' (lowercase) as the value.
    // 2. The result of $numberOne + $numberTwo is not assigned to any variable, so the result is lost.
    // 3. $operatorSymbol is set, but $result is not set, so the result is not displayed.
    // The value used in the switch case ($operation) comes from the form input named "operation".
    // It is retrieved from the POST request: $operation = $_POST["operation"];
    // For example, if the form sends <input type="radio" name="operation" value="add">, then $operation will be "add".
    // The switch statement then matches this value to determine which operation to perform.


    switch ($operation) {
        case 'add':
            $result = $numberOne + $numberTwo;
            $operatorSymbol = "+";
            break;
        case 'subtract':
            $result = $numberOne - $numberTwo;
            $operatorSymbol = "-";
            break;
        case 'multiply':
            $result = $numberOne * $numberTwo;
            $operatorSymbol = "×";
            break;
        case 'divide':
            if ($numberTwo == 0) {
                $result = "Cannot divide by zero";
                $operatorSymbol = "÷";
            } else {
                $result = $numberOne / $numberTwo;
                $operatorSymbol = "÷";
            }
            break;
        default:
            $result = "Invalid operation";
            $operatorSymbol = "";
            break;
    }

    // Display result
    echo "<div class='alert alert-success mt-3'>";
    echo "<h4>Result: $numberOne $operatorSymbol $numberTwo = $result</h4>";
    echo "</div>";
}
?>

