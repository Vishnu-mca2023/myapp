<?php

$numbers = [];
for ($i = 1; $i <= 10; $i++) {
    $numbers[] = $i; 
}

echo "Array initialized using FOR loop:<br>";
print_r($numbers);
echo "<br>";


echo "Displaying numbers:<br>";
foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        echo "Number $num is EVEN<br>";
    } else {
        echo "Number $num is ODD<br>";
    }
}
echo "<br>";


echo "Even numbers:<br>";
foreach ($numbers as $num) {
    if ($num % 2 != 0) {
        continue;
    }
    echo "Even: $num <br>";
}
echo "<br>";


echo "Stop at 7 (using BREAK):<br>";
foreach ($numbers as $num) {
    if ($num == 7) {
        echo "Loop stopped at $num <br>";
        break;
    }
    echo "Number: $num <br>";
}
?>
