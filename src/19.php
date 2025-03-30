<?php
// Define a function to calculate the sum of two numbers
function add($a, $b) {
    return $a + $b;
}

// Get input from user
$firstNumber = readline("Enter the first number: ");
$secondNumber = readline("Enter the second number: ");

// Calculate the sum and display it
echo "The sum of {$firstNumber} and {$secondNumber} is: " . add($firstNumber, $secondNumber);
?>
