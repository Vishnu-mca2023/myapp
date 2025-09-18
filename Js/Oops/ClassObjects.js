class Employee {
  constructor(name, position, salary) {
    this.name = name;
    this.position = position;
    this.salary = salary;
  }

  work() {
    console.log(`${this.name} is working as a ${this.position}`);
  }

  giveRaise(amount) {
    this.salary += amount;
    console.log(`${this.name}'s new salary is ${this.salary}`);
  }
}

// Objects
let emp1 = new Employee("Joe", "Developer", 50000);
let emp2 = new Employee("Ram", "Designer", 45000);

emp1.work();      
emp2.giveRaise(5000);
emp2.work();
emp1.giveRaise(2000); 
