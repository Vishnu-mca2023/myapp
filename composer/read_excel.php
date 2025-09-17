<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

// Load the Excel file
$spreadsheet = IOFactory::load('output.xlsx');
$sheet = $spreadsheet->getActiveSheet();

// Loop through rows
foreach ($sheet->getRowIterator() as $row) {
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false);

    foreach ($cellIterator as $cell) {
        echo $cell->getValue() . " | ";
    }
    echo "<br>";
}
