<?php
require 'vendor/autoload.php';

use League\Csv\Reader;

$csv = Reader::createFromPath('data.csv', 'r');
$csv->setHeaderOffset(0);

foreach ($csv->getRecords() as $record) {
    echo "Name: " . $record['Name'] . " | Age: " . $record['Age'] . "<br>";
}
