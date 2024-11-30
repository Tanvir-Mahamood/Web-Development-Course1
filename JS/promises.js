
/*let promise = new Promise((resolve, reject) => {
    console.log("I am a promise");
    resolve("hi");
})
*/






/*
function getData(dataID, getNextData) {
    return new Promise((resolve, reject) => {

        setTimeout(() => {
            console.log("data ", dataID);
            resolve("success");
            if(getNextData) {
                getNextData();
            }
        }, 10000);

    });
}

function getData2(dataID, getNextData2) {
    return new Promise((resolve, reject) => {

        setTimeout(() => {
            // console.log("data ", dataID);
            reject("Faild. check ur internet connection");
            if(getNextData2) {
                getNextData2();
            }
        }, 10000);

    });
}
    */


/*
const getPromise = () => {
    return new Promise((resolve, reject) => {
        console.log("I ama promise");
        reject("error. net nai!");
    });
};
let p1 = getPromise();
p1.then((res) => {
    console.log("paici, done", res);
});
p1.catch((err) => {
    console.log("oi mama na pls", err);
});
*/



// OPromise Chaine

function asyncFunc1() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log("some data1");
            resolve("success");
        }, 4000);
    });
}
function asyncFunc2() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log("some data2");
            resolve("success");
        }, 4000);
    });
}

/*
console.log("fetching data1...");
let p1 = asyncFunc1();
p1.then((res) => {
    console.log(res);
});
console.log("fetching data2..."); // parallel processing
let p2 = asyncFunc2();
p2.then((res) => {
    console.log(res);
});*/

/*
console.log("fetching data1...");
let p1 = asyncFunc1();
p1.then((res) => {
    console.log(res);
    console.log("fetching data2..."); // serial processing
    let p2 = asyncFunc2();
    p2.then((res) => {
        console.log(res);
    })
});
*/

console.log("fetching data1...");
asyncFunc1().then((res) => {
    console.log("fetching data2..."); // serial processing
    asyncFunc2().then((res) => {
    })
});