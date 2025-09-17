<?php

$marks = [45, 78, 32, 90, 60, 25];


echo "Student Marks and Result:<br>";
foreach ($marks as $index => $mark) {
    echo "Student " . ($index + 1) . " marks: $mark - ";
    
    if ($mark >= 35) {
        echo "Pass<br>";
    } else {
        echo "Fail<br>";
    }
}
echo "<hr>";


echo "Only Passed Students:<br>";
foreach ($marks as $index => $mark) {
    if ($mark < 35) {
        continue; // skip failed
    }
    echo "Student " . ($index + 1) . " marks: $mark <br>";
}
echo "<hr>";


$marks_with_zero = [45, 78, 0, 90, 60];
echo "Checking marks with BREAK:<br>";
foreach ($marks_with_zero as $index => $mark) {
    if ($mark == 0) {
        echo "Student " . ($index + 1) . " has zero marks! Stopping loop.<br>";
        break;
    }
    echo "Student " . ($index + 1) . " marks: $mark <br>";
}
?>
