<?php
// Class (Blueprint)
class Student {
    public $name;
    public $grade;
    public $marks = []; // array to store marks

    // Method to display student details
    function showDetails() {
        return "Student Name: " . $this->name . " | Grade: " . $this->grade;
    }

    // Method to calculate total marks
    function totalMarks() {
        return array_sum($this->marks);
    }

    // Method to calculate percentage
    function percentage() {
        $totalSubjects = count($this->marks);
        if ($totalSubjects > 0) {
            return ($this->totalMarks() / ($totalSubjects * 100)) * 100; 
        } else {
            return 0;
        }
    }
}

// Object 1
$stu1 = new Student();
$stu1->name = "Ram";
$stu1->grade = "A";
$stu1->marks = [90, 85, 95]; // marks in 3 subjects

// Object 2
$stu2 = new Student();
$stu2->name = "Joe";
$stu2->grade = "B";
$stu2->marks = [70, 75, 80]; // marks in 3 subjects

// Display
echo $stu1->showDetails() . "<br>";
echo "Total Marks: " . $stu1->totalMarks() . "<br>";
echo "Percentage: " . $stu1->percentage() . "%<br><br>";

echo $stu2->showDetails() . "<br>";
echo "Total Marks: " . $stu2->totalMarks() . "<br>";
echo "Percentage: " . $stu2->percentage() . "%";
?>
