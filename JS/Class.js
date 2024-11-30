/*const employee = {
    calcTax() {
        console.log("tax is 10%");
    }
};

const person1 = {
    salary: 50000
};
person1.__proto__ = employee;

const person2 = {
    salary: 60000,
    calcTax() {
        console.log("tax is 20%");
    }
};
person2.__proto__ = employee;*/


class ToyotaCar {
    constructor(brand) {
        console.log("new object detected");
        this.brand = brand;
    }

    start() {
        console.log("start");
    }

    stop() {
        console.log("stop");
    }

    /*setBrand(brand) {
        this.brandName = brand;
    }*/
}

let fortuner = new ToyotaCar("abc");
let lexus = new ToyotaCar();
lexus.brand = "xyz";
// fortuner.setBrand("fortuner");


class parent {
    hello() {
        console.log("hello world");
    }
}
class child extends parent {

}
let child1 = new child();


class Person {
    constructor() {
        this.species = "homo sapiens";
    }
    eat() {
        console.log("eating");
    }
    sleep() {
        console.log("sleeping");
    }
    work() {
        console.log("do nothing");
    }
}
class Engineer extends Person {
    constructor(branch) {
        super(); // to invoke parent class constructor
        this.branch = branch;
    }
    work() {
        super.eat();
        console.log("solve problems"); // method overriding
    }
}

let tanvir = new Engineer();



// error handling
let a = 22;
let b = 49;
console.log("a + b = ", a+b);
console.log("a + b = ", a+b);
console.log("a + b = ", a+b);

try {
    console.log("a + b = ", a+c); // error
}
catch (err) {
    console.log(err);
}

console.log("a + b = ", a+b);
console.log("a + b = ", a+b);
console.log("a + b = ", a+b);
console.log("a + b = ", a+b);