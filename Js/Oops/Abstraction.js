// Abstract Class
class Ride {
  constructor(distance) {
    if (this.constructor === Ride) {
      throw new Error("Cannot create object of abstract class Ride");
    }
    this.distance = distance;
  }

  // Abstract method
  calculateFare() {
    throw new Error("Method 'calculateFare()' must be implemented.");
  }
}

// Child Class 1: Car Ride
class CarRide extends Ride {
  calculateFare() {
    let fare = this.distance * 15; // ₹15 per km
    console.log(`Car Ride Fare: ₹${fare}`);
  }
}

// Child Class 2: Bike Ride
class BikeRide extends Ride {
  calculateFare() {
    let fare = this.distance * 7; // ₹7 per km
    console.log(`Bike Ride Fare: ₹${fare}`);
  }
}

// Child Class 3: Auto Ride
class AutoRide extends Ride {
  calculateFare() {
    let fare = this.distance * 10; // ₹10 per km
    console.log(`Auto Ride Fare: ₹${fare}`);
  }
}

// ====== Using the abstraction ======
let ride1 = new CarRide(10);
let ride2 = new BikeRide(5);
let ride3 = new AutoRide(8);

ride1.calculateFare(); // Car Ride Fare: ₹150
ride2.calculateFare(); // Bike Ride Fare: ₹35
ride3.calculateFare(); // Auto Ride Fare: ₹80
