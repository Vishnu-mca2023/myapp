<?php
// Trait: reusable code
trait BreakTime {
    public function takeBreak() {
        return "Taking a short break ☕";
    }
}

// Parent class
class Worker {
    public function work() {
        return "Doing some generic work...";
    }
}

// Child class: Teacher
class Teacher extends Worker {
    use BreakTime; // use trait

    public function work() {
        return "Teacher is teaching students 📚";
    }
}

// Child class: Doctor
class Doctor extends Worker {
    use BreakTime; // use trait

    public function work() {
        return "Doctor is treating patients 🏥";
    }
}

// Objects
$teacher = new Teacher();
$doctor = new Doctor();

// Use work and trait method
echo $teacher->work() . "<br>";
echo $teacher->takeBreak() . "<br><br>";

echo $doctor->work() . "<br>";
echo $doctor->takeBreak();
?>
