let newBtn = document.createElement("button");
newBtn.innerText = "click";
newBtn.style.color = "white";
newBtn.style.backgroundColor = "red";
document.querySelector("body").prepend(newBtn);

let pera = document.querySelector("p");
//pera.setAttribute("class", "newClass")
pera.classList.add("newClass");