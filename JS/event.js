/*let  btn1 = document.querySelector("#btn1");
btn1.onclick = () => {
    console.log("button is clicked");
}

let div = document.querySelector("div");
div.onmouseover = () => {
    console.group("u are inside the div");
}*/

let  btn1 = document.querySelector("#btn1");
btn1.addEventListener("click", () => {
    console.log("hnadler1");
})

btn1.addEventListener("click", () => {
    console.log("hnadler2");
})

const handler_3 = () => {
    console.log("HANDLER3");
};

btn1.addEventListener("click", handler_3)

btn1.addEventListener("click", () => {
    console.log("hnadler4");
})


btn1.removeEventListener("click", handler_3);

let currMode = "light";
let body = document.querySelector("body");

let modeBtn = document.querySelector("#mode");
modeBtn.addEventListener("click", () => {
    if(currMode == "light") 
    {
        currMode = "dark";
        //document.querySelector("body").style.backgroundColor = "black";
        body.classList.add("dark");
        body.classList.remove("light");
    }
    else
    {
        currMode = "light";
        //document.querySelector("body").style.backgroundColor = "white";
        body.classList.add("light");
        body.classList.remove("dark");
    }

    console.log(currMode);
})