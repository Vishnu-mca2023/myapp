<?php
// Abstract class: blueprint for all cars
abstract class Car {
    public $brand;

    abstract public function drive(); // every car MUST have drive()

    // Common method for all cars
    public function info() {
        return "This is a $this->brand.";
    }
}

// Child class: SportsCar
class SportsCar extends Car {
    public $speed;

    public function __construct($brand, $speed) {
        $this->brand = $brand;
        $this->speed = $speed;
    }

    public function drive() {
        return "$this->brand Sports Car drives FAST at $this->speed km/h!";
    }
}

// Child class: ElectricCar
class ElectricCar extends Car {
    public $battery;

    public function __construct($brand, $battery) {
        $this->brand = $brand;
        $this->battery = $battery;
    }

    public function drive() {
        return "$this->brand Electric Car drives SILENTLY and has $this->battery% battery left.";
    }
}

// Child class: Truck
class Truck extends Car {
    public $loadCapacity;

    public function __construct($brand, $loadCapacity) {
        $this->brand = $brand;
        $this->loadCapacity = $loadCapacity;
    }

    public function drive() {
        return "$this->brand Truck drives SLOWLY but can carry $this->loadCapacity tons of load.";
    }
}

// Create objects
$car1 = new SportsCar("Ferrari", 320);
$car2 = new ElectricCar("Tesla", 85);
$car3 = new Truck("Volvo", 15);

// Drive cars
echo $car1->info() . "<br>";
echo $car1->drive() . "<br><br>";

echo $car2->info() . "<br>";
echo $car2->drive() . "<br><br>";

echo $car3->info() . "<br>";
echo $car3->drive();
?>
