class BankAccount {
  showType() {
    console.log("This is a generic bank account");
  }
}

class SavingsAccount extends BankAccount {
  showType() {
    console.log("This is a Savings Account");
  }
}

class CurrentAccount extends BankAccount {
  showType() {
    console.log("This is a Current Account");
  }
}

let acc1 = new SavingsAccount();
let acc2 = new CurrentAccount();


acc1.showType(); 
acc2.showType(); 

