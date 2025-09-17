<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Create spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Add header row
$sheet->setCellValue('A1', 'Name');
$sheet->setCellValue('B1', 'Age');

// Add data rows
$sheet->setCellValue('A2', 'Ram');
$sheet->setCellValue('B2', 22);

$sheet->setCellValue('A3', 'Joe');
$sheet->setCellValue('B3', 21);

$sheet->setCellValue('A4', 'Ravi');
$sheet->setCellValue('B4', 25);

// Define path to save file
$filename = __DIR__ . "/output.xlsx";

// Save to server (write method)
$writer = new Xlsx($spreadsheet);
$writer->save($filename);

echo "✅ File written successfully: " . $filename;
