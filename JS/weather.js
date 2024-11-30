const apikey = null; // use your own API Key
const apiUrl = "https://api.openweathermap.org/data/2.5/weather?units=metric&q=";

const searchBox = document.querySelector(".search input");
const searchBtn = document.querySelector(".search button");
const weatherIcon = document.querySelector(".weather-icon");
const weatherCond = document.querySelector(".condition");

async function checkWeather(city) {
    const response = await fetch(apiUrl + city + `&appid=${apikey}`);
    data = await response.json();

    if(response.status !== 200) {
        document.querySelector(".error").style.display = "block";
        document.querySelector(".weather").style.display = "none";
    }
    else {
        document.querySelector(".city").innerText = data.name;
        document.querySelector(".temp").innerHTML = Math.round(data.main.temp) + "°C";
        document.querySelector(".humidity").innerHTML = data.main.humidity + "%";
        document.querySelector(".wind").innerHTML = data.wind.speed + "km/h";

        document.querySelector(".temp2").innerText = "Current temperature: " + Math.round(data.main.temp) + "°C";
        document.querySelector(".feel-temp").innerText = "Real feel: " + Math.round(data.main.feels_like) + "°C";
        document.querySelector(".max-temp").innerText = "Maximum temperature: " + Math.round(data.main.temp_max) + "°C";
        document.querySelector(".min-temp").innerText = "Minimum temperature: " + Math.round(data.main.temp_min) + "°C";
        document.querySelector(".wind2").innerText = "Wind speed: " + data.wind.speed + "km/h";
        document.querySelector(".dirr").innerText = "Wind direction: " + data.wind.deg + "°";
        document.querySelector(".pressure").innerText = "Pressure: " + data.main.pressure*0.75 + "mmHg";


        weatherCond.innerText = data.weather[0].main;

        if(data.weather[0].main === "Clouds") {
            weatherIcon.src = "imagesW/clouds.png";
        }
        else if(data.weather[0].main === "Clear") {
            weatherIcon.src = "imagesW/clear.png";
        }
        else if(data.weather[0].main === "Rain") {
            weatherIcon.src = "imagesW/rain.png";
        }
        else if(data.weather[0].main === "Drizzle") {
            weatherIcon.src = "imagesW/drizzle.png";
        }
        else if(data.weather[0].main === "Mist") {
            weatherIcon.src = "imagesW/mist.png";
        }


        document.querySelector(".weather").style.display = "block";
        document.querySelector(".more-info").style.display = "block";
        document.querySelector(".error").style.display = "none";
    }

    console.log(response.status);
    console.log(data);
}

searchBtn.addEventListener("click", () => {
    checkWeather(searchBox.value);
})
