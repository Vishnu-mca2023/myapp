<?php

$employees = [
    "Vishnu" => 50000,
    "Rohan" => 45000,
    "Deepa" => 60000,
    "Ravi" => 40000
];

echo "Employee Salary List:<br>";
foreach ($employees as $name => $salary) {
    echo "Employee: $name, Salary: ₹$salary<br>";
}
?>
