<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Calculation Result</title>
</head>
<body>
<?php # handle_form.php
//Validation of input data, check empty

if(empty($_POST['number1']) || empty($_POST['number2'])){
    echo "Error: Please fill out both fields";
} else {
    if (!is_numeric($_POST['number1']) || !isnumeric($_POST['number1'])) {
    echo "Error: Both fields must contain numeric values.";
    }else{
        //Checks if dividing by 0
        if($operation == 'divide' && $num2 == 0) {
            echo "Division by 0 not allowed. Please enter a different number.";
        } else {
            //Runs the calculation based on operation
            switch($operation) {
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
            echo "<p> The result is $result<p>";


        }
    }   
}




//retrieve and cast the data by using $_REQUEST or $_POST and name of the textboxes
$num1 = (int) $_POST['number1'];
$num2 = (int) $_POST['number2'];
$operation = $_REQUEST['operation'];
//$operation = "add";

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
echo "<p> The result is $result<p>";*/

?>
</body>
</html>