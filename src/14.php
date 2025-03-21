<?php
function calculate_area($shape, $dimensions) {
    switch ($shape) {
        case 'circle':
            return pi() * pow($dimensions, 2);
        case 'rectangle':
            return $dimensions * $dimensions;
        case 'triangle':
            return 0.5 * $dimensions * $dimensions;
        default:
            return "Shape not recognized";
    }
}
?>
