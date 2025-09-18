class Ride {
  constructor(distance) {
    if (new.target === Ride) throw new Error("Cannot create object of abstract class");
    this.distance = distance;
  }
  calculateFare() {
    throw new Error("Must implement calculateFare()");
  }
}

class CarRide extends Ride {
  calculateFare() { console.log(`Car Fare: ₹${this.distance * 15}`); }
}

class BikeRide extends Ride {
  calculateFare() { console.log(`Bike Fare: ₹${this.distance * 7}`); }
}

class AutoRide extends Ride {
  calculateFare() { console.log(`Auto Fare: ₹${this.distance * 10}`); }
}

new CarRide(10).calculateFare();  
new BikeRide(5).calculateFare();  
new AutoRide(8).calculateFare();  