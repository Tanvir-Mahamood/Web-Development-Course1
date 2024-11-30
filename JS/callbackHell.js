/*
function getData(dataID) {
    setTimeout(() => {
        console.log("data = ", dataID);
    },2000);
}
getData(1);
getData(2);
getData(3);
*/

function getData(dataID, getNextData) {
    setTimeout(() => {
        console.log("Data = ", dataID);
        if(getNextData) {
            getNextData();
        }
    }, 2000);
}

/*
getData(1, () => {
    getData(2);
})
*/

getData(1, () => {
    console.log("getting data2...");
    getData(2, () => {
        console.log("getting data3...");
        getData(3, () => {
            console.log("getting data4...");
            getData(4);
        })
    })
})


