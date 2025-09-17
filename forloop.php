<?php


$marks = [45, 78, 32, 90, 60, 25];


echo "Student Marks and Result (Using FOR loop):<br>";
for ($i = 0; $i < count($marks); $i++) {
    echo "Student " . ($i + 1) . " marks: " . $marks[$i] . " - ";
    
    if ($marks[$i] >= 35) {
        echo "Pass<br>";
    } else {
        echo "Fail<br>";
    }
}
?>
