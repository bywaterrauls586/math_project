<?php
// Example PHP code to demonstrate basic operations and string manipulation

// Define an array of numbers
numbers = [1, 2, 3, 4, 5];

// Print the first element of the array
echo "The first number is: " . $numbers[0]; // Output: The first number is: 1

// Calculate the sum of all elements in the array
$sum = array_sum($numbers);
echo "The sum of the numbers is: " . $sum; // Output: The sum of the numbers is: 15

// Convert the last element to a string and print it
$result = $numbers[count($numbers) - 1];
echo "The result after converting the last element to a string is: " . $result; // Output: The result after converting the last element to a string is: 4

// Get an index of an element in the array using its position (0-based)
$index = 2;
echo "An element at position " . $index . " is: " . $numbers[$index]; // Output: An element at position 2 is: 3
