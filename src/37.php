<?php
// Define an array of constants and variables
$constants = [
    "PI" => 3.14159,
    "E" => 2.71828,
    "ABS" => function($x) { return abs($x); },
    "MOD" => function($x, $y) { return (int)$x % $y; }
];

// Example usage of constants
echo $constants["PI"];
echo "\n";
echo $constants["E"];
