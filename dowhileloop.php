<?php
$totalTickets = 5;

$sold = 0;

echo "Selling tickets:<br>";

do {
    $sold++;
    echo "Ticket number $sold sold.<br>";
} while ($sold < $totalTickets);

echo "All tickets are sold out!";
?>
