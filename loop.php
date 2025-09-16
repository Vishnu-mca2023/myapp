<?php
$students = [
    [
        "name" => "Vishnu",
        "tam"  => 30,
        "eng"  => 20,
        "math" => 100
    ],
    [
        "name" => "Anu",
        "tam"  => 90,
        "eng"  => 85,
        "math" => 88
    ],
    [
        "name" => "Rahul",
        "tam"  => 70,
        "eng"  => 60,
        "math" => 75
    ],
    [
        "name" => "Meera",
        "tam"  => 95,
        "eng"  => 30,
        "math" => 89
    ],
    [
        "name" => "Arjun",
        "tam"  => 40,
        "eng"  => 55,
        "math" => 65
    ]
];

# ================= FOREACH LOOP =================
echo "<h3> Passed Students (foreach loop)</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>
<tr><th>Name</th><th>Tamil</th><th>English</th><th>Math</th><th>Total</th></tr>";

foreach ($students as $student) {
    if ($student["tam"] >= 35 && $student["eng"] >= 35 && $student["math"] >= 35) {
        $total = $student["tam"] + $student["eng"] + $student["math"];
        echo "<tr>
                <td>{$student['name']}</td>
                <td>{$student['tam']}</td>
                <td>{$student['eng']}</td>
                <td>{$student['math']}</td>
                <td>{$total}</td>
              </tr>";
    }
}
echo "</table><br>";

# ================= FOR LOOP =================
echo "<h3>Failed Students (for loop)</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>
<tr><th>Name</th><th>Tamil</th><th>English</th><th>Math</th><th>Total</th></tr>";

for ($i = 0; $i < count($students); $i++) {
    if ($students[$i]["tam"] < 35 || $students[$i]["eng"] < 35 || $students[$i]["math"] < 35) {
        $total = $students[$i]["tam"] + $students[$i]["eng"] + $students[$i]["math"];
        echo "<tr>
                <td>{$students[$i]['name']}</td>
                <td>{$students[$i]['tam']}</td>
                <td>{$students[$i]['eng']}</td>
                <td>{$students[$i]['math']}</td>
                <td>{$total}</td>
              </tr>";
    }
}
echo "</table><br>";

# ================= WHILE + SWITCH =================
echo "<h3>Pass/Fail + Grade (while + switch)</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>
<tr><th>Name</th><th>Tamil</th><th>English</th><th>Math</th><th>Total</th><th>Status</th><th>Grade</th></tr>";

$i = 0;
while ($i < count($students)) {
    $student = $students[$i];
    $total   = $student["tam"] + $student["eng"] + $student["math"];

    // Default values
    $status = "Fail";
    $grade  = "Fail";

    // Pass check
    if ($student["tam"] >= 35 && $student["eng"] >= 35 && $student["math"] >= 35) {
        $status = "Pass";

        switch (true) {
            case ($total >= 250):
                $grade = "A";
                break;
            case ($total >= 200):
                $grade = "B";
                break;
            case ($total >= 150):
                $grade = "C";
                break;
            default:
                $grade = "Fail";
        }
    }

    echo "<tr>
            <td>{$student['name']}</td>
            <td>{$student['tam']}</td>
            <td>{$student['eng']}</td>
            <td>{$student['math']}</td>
            <td>{$total}</td>
            <td>{$status}</td>
            <td>{$grade}</td>
          </tr>";

    $i++;
}

echo "</table>";
?>
