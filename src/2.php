<?php
$x = rand(1, 5);
$y = rand(6, 10);
if ($x > $y) {
    echo "X is greater than Y";
} else if ($x < $y) {
    echo "Y is greater than X";
} else {
    echo "X is equal to Y";
}
?>