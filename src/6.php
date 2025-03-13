<?php
$a = rand(1, 10);
$b = rand(1, 10);
echo "The result of $a + $b is ";
if ($a > $b) {
    echo $a + $b;
} else {
    echo $b + $a;
}
?>