<?php
$i = 1;
while ($i <= 5) {
    echo "Number: $i <br>";
    $i++;
}

echo "<br>";

$j = 1;
do {
    echo "Value: $j <br>";
    $j++;
} while ($j <= 3);

echo "<br>";

for ($k = 1; $k <= 5; $k++) {
    echo "Count: $k <br>";
}

echo "<br>";


$age = 20;
if ($age >= 18) {
    echo "You are eligible to vote.<br>";
} else {
    echo "You are not eligible to vote.<br>";
}

?>
