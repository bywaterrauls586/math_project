<?php
// Example PHP code for a math project

function addNumbers($a, $b) {
    return $a + $b;
}

function subtractNumbers($a, $b) {
    return $a - $b;
}

function multiplyNumbers($a, $b) {
    return $a * $b;
}

function divideNumbers($a, $b) {
    if ($b == 0) {
        throw new Exception("Cannot divide by zero.");
    }
    return $a / $b;
}

// Example usage
echo "Sum: " . addNumbers(10, 20) . "\n";
echo "Difference: " . subtractNumbers(50, 30) . "\n";
