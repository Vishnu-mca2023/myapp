<?php

$temperatures = [22, 35, 30, 15, 40, 28];

echo "Temperature Levels:<br>";
for ($i = 0; $i < count($temperatures); $i++) {
    echo "Day " . ($i + 1) . ": " . $temperatures[$i] . "°C - ";

    if ($temperatures[$i] >= 35) {
        echo "Hot<br>";
    } elseif ($temperatures[$i] >= 25) {
        echo "Warm<br>";
    } else {
        echo "Cool<br>";
    }
}
?>
