// Parent Class 
class Animal {
  constructor(name) {
    this.name = name;
  }

  eat() {
    console.log(`${this.name} is eating.`);
  }
}

//Child Class 
class Dog extends Animal {
  bark() {
    console.log(`${this.name} is barking.`);
  }
}


let dog1 = new Dog("Buddy");


dog1.eat();  
dog1.bark(); 
