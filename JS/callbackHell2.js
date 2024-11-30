// if u want to optmise callback hell with promise chain
function getData(dataID) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log("data = ", dataID);
            resolve("success");
        }, 2000);
    });
}
/*
getData(1).then((res) => {
    console.log(res);
    getData(2).then(() => {
        console.log(res);
    })
})
*/

getData(1).then((res) => {
    return getData(2);
}).then((res) => {
    return getData(3);
}).then((res) => {
    console.log(res);
});