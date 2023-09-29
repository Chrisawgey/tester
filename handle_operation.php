<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Calculation Result</title>
</head>
<body>
<?php
//you were using the variables '$operation', '$num1' and '$num2' before they were defined
// Retrieve and cast the data by using $_REQUEST or $_POST and name of the textboxes
//aded line 12-14
//all i did was make them a funct
$num1 = isset($_POST['number1']) ? (int)$_POST['number1'] : 0;
$num2 = isset($_POST['number2']) ? (int)$_POST['number2'] : 0;
$operation = isset($_POST['operation']) ? $_POST['operation'] : '';

// Validation of input data, check empty
//changed from POST to $num1
if (empty($num1) || empty($num2)) {
    echo "Error: Please fill out both fields";
} else {
    //you had a type here you hade !isnumeric it needed a _
    //changed post for $num1 
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Error: Both fields must contain numeric values.";
    } else {
        // Checks if dividing by 0
        if ($operation == 'divide' && $num2 == 0) {
            echo "Division by 0 not allowed. Please enter a different number.";
        } else {
            // Runs the calculation based on the operation
            // added a space
            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    $result = $num1 / $num2;
                    break;
                case 'modulus':
                    $result = $num1 % $num2;
                    break;
                default:
                    echo "Invalid operation selected.";
                    break;
            }

            // Print the submitted information:
                //you forgot to close the <p>
            echo "<p> The result is $result</p>";
        }
    }
}
?>

</body>
</html>

/*
PHP if....else...elseif statement
if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif....else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed
https://www.w3schools.com/php/php_if_else.asp
*/
//
//you code starts from here
//
//validation of the input using is_numeric() function, data type checking

/*if($operation == "add"){
    $result = $num1 + $num2;
}elseif ($operation == "subtract"){
    $result = $num1 - $num2;
}elseif ($operation == "multiply") {
    $result = $num1 * $num2;
}elseif ($operation == "divide") {
    if($num2 != 0) {
        $result = $num1 / $num2;
    }else{
        echo "Cannot divide by 0. Please try again."
    }
}elseif ($operation == "modulus"){
    $result = $num1 % $num2;
}*/



/*if ($operation == "add") $result = $num1+$num2;
if ($operation == "subtract") $result = $num1-$num2;
if ($operation == "multiply") $result = $num1*$num2;
if ($operation == "divide") $result = $num1/$num2;
if ($operation == "modulus") $result = $num1%$num2;*/


/*// Print the submitted information:
echo "" The result is $result";*/