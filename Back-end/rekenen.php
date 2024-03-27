<?php
function multiply($n1, $n2) {
    return ($n1 * $n2);
}
function generateMultiplicationTable($numbers) {
    foreach ($numbers as $number) {
        for ($j = 1; $j <= 10; $j++) {
            echo multiply($number, $j) . "<br>";
        }
        echo "<br>";
    }
}
$numbers = [3,5,8,12];
generateMultiplicationTable($numbers);
?>
