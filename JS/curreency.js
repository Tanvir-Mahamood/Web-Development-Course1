//const BASE_URL = "https://cdn.jsdelivr.net/npm/@fawazahmed0/currency-api@latest/v1/currencies";

// for(code in countryList) {
//   console.log(code, countryList[code]);
// }
const dropdowns = document.querySelectorAll(".dropdown select");
const btn = document.querySelector("form button");
const fromCurr = document.querySelector(".from select");
const toCurr = document.querySelector(".to select");
const msg = document.querySelector(".msg");

for(let select of dropdowns) {
  for(currCode in countryList) {
    let newOption = document.createElement("option");
    newOption.innerText = currCode;
    newOption.value = currCode;

    if(select.name == "from" && currCode === "USD") {
      newOption.selected = "selected" // by default
    }
    else if(select.name == "to" && currCode === "BDT") {
      newOption.selected = "selected" // by default
    }
    
    select.append(newOption);
  }

  select.addEventListener("change", (evt) => {
    updateFlag(evt.target);
  })

}

const updateFlag = (element) => {
  let currCode = element.value;
  //console.log(element, currCode);
  let countryCode = countryList[currCode];
  let newSrc = `https://flagsapi.com/${countryCode}/flat/64.png`;
  let img = element.parentElement.querySelector("img");
  img.src = newSrc;
}


btn.addEventListener("click", async (evt) => {
  evt.preventDefault();
  let amount = document.querySelector(".amount input");
  let amountVal = amount.value;
  if(amountVal == "" || amountVal < 1) {
    amountVal = 1;
    amount.value = "1";
  }
  //console.log(fromCurr.value, toCurr.value);
  //const URL = `${BASE_URL}/${fromCurr.value.toLowerCase()}/${toCurr.value.toLowerCase()}.json`;
  const URL = "https://cdn.jsdelivr.net/npm/@fawazahmed0/currency-api@latest/v1/currencies/eur.json";

  let response = await fetch(URL);
  let data = await response.json();
  let rate = data["eur"];
  //console.log(data);

  let val_from = rate[fromCurr.value.toLowerCase()];
  let val_to = rate[toCurr.value.toLowerCase()];
  let val = (val_to / val_from) * amount.value;
  //console.log(data["date"]);

  msg.innerText = `${amount.value} ${fromCurr.value} = ${val} ${toCurr.value} \nUpdated at ${data["date"]}`; 

})