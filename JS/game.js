let userScore = 0;
let compScore = 0;

const choices = document.querySelectorAll(".choice");
const msg = document.querySelector("#msg");
const userScorePara = document.querySelector("#user-score")
const compScorePara = document.querySelector("#comp-score")

const genCompChoice = () => {
    const options = ["rock", "paper", "scissors"];
    const randIdx = Math.floor(Math.random() * 3); // 0,1,2 => randomly choice
    return options[randIdx];
}

// final result
const drawGame = (userChoice) => {
    // console.log("game was draw");
    msg.innerText = `Game was draw by selection ${userChoice}`;
    msg.style.backgroundColor = "black";
}
const showWinner = (userWin, userChoice, compChoice) => {
    if(userWin) 
    {
        userScore++;
        userScorePara.innerText = userScore;

        // console.log("you win");
        msg.innerText = `You win! Your ${userChoice} beats ${compChoice}`;
        msg.style.backgroundColor = "green";
    }
    else 
    {
        compScore++;
        compScorePara.innerText = compScore;
        
        // console.log("you lose");
        msg.innerText = `You lose! ${compChoice} beats your ${userChoice}`;
        msg.style.backgroundColor = "red";
    }
}

const playGame = (userChoice) => {
    // console.log("user choice = ", userChoice);
    const compChoice = genCompChoice();
    // console.log("computer = ", compChoice);

    if(userChoice === compChoice)
    {
        drawGame(userChoice); // need to write
    }
    else
    {
        let userWin = true;
        
        if(userChoice === "rock") // computer: paper, scissors
        {
            userWin = compChoice === "paper" ? false : true;
        }
        else if(userChoice === "paper") // computer: rock, scissors
        {
            userWin = compChoice === "scissors" ? false : true;
        }
        else // user: scissors, computer: rock, paper
        {
            userWin = compChoice === "rock" ? false : true;
        }

        showWinner(userWin, userChoice, compChoice);
    }
}

choices.forEach((choice) => {
    choice.addEventListener("click", () => {
        const userChoice = choice.getAttribute("id");
        playGame(userChoice);
    })
})