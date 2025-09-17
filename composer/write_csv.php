<?php
require 'vendor/autoload.php';

use League\Csv\Writer;

// Create or open a CSV file for writing
$csv = Writer::createFromPath('output.csv', 'w+'); // 'w+' creates a new file or overwrites existing

// Insert the header row
$csv->insertOne(['Name', 'Age']);

// Insert multiple rows of data
$csv->insertAll([
    ['ram', 22],
    ['joe', 21],
    ['Ravi', 25]
]);

echo "CSV file created successfully!";
