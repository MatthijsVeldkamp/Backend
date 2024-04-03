<?php
function generateMultiplicationTable($numbers) {
    foreach ($numbers as $number) {
        for ($j = 1; $j <= 10; $j++) {
            echo "$number x $j = " . ($number * $j) . "<br>";
        }
        echo "<br>";
    }
}
$numbers = [3, 5, 8, 12];
generateMultiplicationTable($numbers);
?>
