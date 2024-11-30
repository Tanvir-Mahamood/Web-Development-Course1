// Asynchronous Programming
console.log("one");
console.log("two");

setTimeout(() => {
    console.log("three");
}, 3000);

console.log("four");
console.log("five");

// Callback
function sum(a, b) {
    console.log(a+b);
}
function caculator(a, b, sumCallback) {
    sumCallback(a, b);
}
caculator(1,2,sum);