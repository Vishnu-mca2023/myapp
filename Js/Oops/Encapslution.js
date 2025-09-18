class BankAccount {
  #balance; 

  constructor(owner, initialBalance) {
    this.owner = owner;
    this.#balance = initialBalance; 
  }

 deposit(amount) {
    this.#balance += amount;
    console.log(`${this.owner} deposited ₹${amount}. New balance: ₹${this.#balance}`);
  }

  withdraw(amount) {
    if(amount <= this.#balance) {
      this.#balance -= amount;
      console.log(`${this.owner} withdrew ₹${amount}. Remaining balance: ₹${this.#balance}`);
    } else {
      console.log(`Insufficient balance for ${this.owner}`);
    }
  }

  getBalance() {
    console.log(`${this.owner}'s current balance: ₹${this.#balance}`);
  }
}

let acc1 = new BankAccount("Vishnu", 5000);

acc1.deposit(2000);   
acc1.withdraw(3000); 
acc1.getBalance();   


