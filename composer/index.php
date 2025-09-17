<?php
require 'vendor/autoload.php'; // Include Composer packages

use League\Csv\Reader;
use League\Csv\Writer;

// ====== Read CSV ======
try {
    $reader = Reader::createFromPath('sample.csv', 'r');
    $reader->setHeaderOffset(0); // use first row as header
    $records = iterator_to_array($reader->getRecords());

    echo "Reading CSV:\n";
    foreach ($records as $row) {
        echo $row['Name'] . " - " . $row['Age'] . "\n";
    }

    // ====== Write CSV ======
    $writer = Writer::createFromPath('output.csv', 'w+');
    
    // Insert header
    $writer->insertOne(['Name', 'Age']);
    
    // Insert all rows
    foreach ($records as $row) {
        $writer->insertOne([$row['Name'], $row['Age']]);
    }

    echo "\nCSV file 'output.csv' created successfully!";
    
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
