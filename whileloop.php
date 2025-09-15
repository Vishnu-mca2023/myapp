<?php
$apples = [3, 5, 2, 6, 4];
$i = 0;
echo "Number of apples in each basket:<br>";
while ($i < count($apples)) {
    echo "Basket " . ($i + 1) . " has " . $apples[$i] . " apples<br>";
    $i++; 
}
?>
