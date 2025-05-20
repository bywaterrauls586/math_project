<?php
// Define a function to perform calculations
function calculate($a, $b, $operation) {
    switch ($operation) {
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        case 'multiply':
            return $a * $b;
        case 'divide':
            if ($b == 0) {
                echo "Error: Division by zero.";
            } else {
                return $a / $b;
            }
    }
}

// Example usage of the function
$result = calculate(5, 3, 'add');
echo "The result is: $result";
?>
