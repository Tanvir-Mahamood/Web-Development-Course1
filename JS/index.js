/*let name = "Tanvir Mahamood";
let number = [1,2,3,4,5];
let person = {
    name: "dipe",
    age: 20,
    married: false
};

for(let i of name) console.log(i);
for(let i in name) console.log(`${i} and ${name[i]}`);

for(let key in person) 
{
    console.log(person[key]);
}

name2 = name.replace("T", "X");

for(let i of number) console.log(i);


console.log("hi brooooo");

let price = [250, 645, 300, 900, 50];
for(let i in price)
{
    price[i] = price[i] * 0.1;
}
price.push(69);
price.pop();
console.log(price);*/

let name = document.getElementsByClassName("heading");

console.log(name);
console.dir(name);

let first = document.querySelector("p");
console.dir(first);
let all = document.querySelectorAll("p");
console.dir(all);

let he = document.querySelector(".heading");
console.dir(he);

let div = document.querySelector("div");
console.dir(div);

let msz = document.querySelector("#secret");
console.dir(msz);

let h2 = document.querySelector("h2");
console.dir(h2.innerText);
h2.innerText = h2.innerText + " of stupid";
console.dir(h2.innerText);

let divs = document.querySelectorAll(".box");
console.dir(divs);
divs[0].innerText = "anahdahs";
divs[1].innerText = "inar";
divs[2].innerText = "luap";

for(div of divs)
{
    div.innerText = div.innerText + " mine.";
}