<?php
// Interface = a rule that says these methods must exist
interface Work {
    public function info();   // all staff must have this
    public function teach();  // teachers must have this
}

// Parent class
class Staff {
    public $name;

    public function info() {
        return "Staff Name: $this->name";
    }
}

// Child class implementing the interface
class Teacher extends Staff implements Work {
    public $subject;

    public function teach() {
        return "$this->name teaches $this->subject";
    }
}

// Create object
$teacher = new Teacher();
$teacher->name = "Mr. Raj";
$teacher->subject = "Math";

// Use methods
echo $teacher->info() . "<br>";
echo $teacher->teach();
?>
