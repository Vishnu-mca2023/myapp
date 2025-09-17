<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

$message = '';
$table = '';

if(isset($_FILES['excel_file']) && $_FILES['excel_file']['error'] == 0) {
    $fileTmpPath = $_FILES['excel_file']['tmp_name'];
    $fileName = $_FILES['excel_file']['name'];

    try {
        // Load Excel file
        $spreadsheet = IOFactory::load($fileTmpPath);
        $sheet = $spreadsheet->getActiveSheet();

        $table .= "<h3>Contents of: $fileName</h3>";
        $table .= "<table border='1' cellpadding='5' cellspacing='0'>";

        foreach ($sheet->getRowIterator() as $row) {
            $table .= "<tr>";
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(false);
            foreach ($cellIterator as $cell) {
                $table .= "<td>" . $cell->getValue() . "</td>";
            }
            $table .= "</tr>";
        }

        $table .= "</table>";
    } catch (Exception $e) {
        $message = "Error reading file: " . $e->getMessage();
    }

} elseif(isset($_POST['submit'])) {
    $message = "No file uploaded or an error occurred!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload & Read Excel</title>
</head>
<body>
    <h2>Upload Excel File</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="excel_file" accept=".xlsx,.xls,.csv" required>
        <button type="submit" name="submit">Upload files</button>
    </form>

    <?php
    if($message != '') {
        echo "<p style='color:red;'>$message</p>";
    }
    if($table != '') {
        echo $table;
    }
    ?>
</body>
</html>
