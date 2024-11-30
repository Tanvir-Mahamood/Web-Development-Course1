/*let div = document.querySelector("div");
let val = div.getAttribute("id");
console.log(val);

let pp = document.querySelector("p");
let cla = pp.setAttribute("class", "69");*/


/*let div = document.querySelector("div");

div.style.backgroundColor = "green";
div.innerText = "abcd";*/

let btn = document.createElement("button");
btn.innerText = "click";

let div = document.querySelector("div");
div.append(btn);

let heading = document.createElement("h1");
heading.innerText = "h j b r l";
div.before(heading);

let ppp = document.querySelector("p");
ppp.remove();
