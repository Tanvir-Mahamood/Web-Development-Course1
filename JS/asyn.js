function api() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log("weather update");
            resolve(200);
        }, 2000);
    });
}
function api2(dataID) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log("data = ", dataID);
            resolve("success");
        }, 2000);
    });
}

async function getWeatherData() {
    await api();
    await api();
}

async function getAllData() {
    console.log("getting data1...");
    await api2(1);
    console.log("getting data2...");
    await api2(2);
    console.log("getting data3...");
    await api2(3);
}

// it i much advantagable, but we need to call an unnecessary function
// to observe the fact. To get rid of it, we are goint tot use
// IIFE, meaning Immediately Invoked Function Expression

(async function() {
    console.log("getting data1...");
    await api2(1);
    console.log("getting data2...");
    await api2(2);
    console.log("getting data3...");
    await api2(3);
})();