const URL = "https://cat-fact.herokuapp.com/facts";

// let promise = fetch(URL);
// console.log(promise);

const factPara = document.querySelector("#fact");
const btn = document.querySelector("#btn");


const getFacts = async () => {
    console.log("getting data...");
    let response = await fetch(URL); // get request
    console.log(response); // JSON format

    let data = await response.json();
    console.log(data);
    console.log("again...");
    console.log(data[0]);
    console.log(data[0].text);

    factPara.innerText = data[0].text;
}

// if we used promise chain,... just for fun
function getFacts2() {
    fetch(URL).then((response) => {
        return response.json();
    }).then((data) => {
        console.log(data);
        factPara.innerText = data[0].text;
    })
}

btn.addEventListener("click", getFacts2);