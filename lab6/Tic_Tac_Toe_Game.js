const cells = document.querySelectorAll(".cell");
const statusText = document.getElementById("status");
const resetBtn = document.getElementById("reset");

let currentPlayer = "X";
let board = ["", "", "", "", "", "", "", "", ""];
let gameActive = true;

const winConditions = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];

cells.forEach((cell, index) => {
    cell.addEventListener("click", () => handleClick(cell, index));
});

function handleClick(cell, index) {

    if (board[index] !== "" || !gameActive) {
        return;
    }

    board[index] = currentPlayer;
    cell.textContent = currentPlayer;

    checkWinner();

    currentPlayer = currentPlayer === "X" ? "O" : "X";

    if (gameActive) {
        statusText.textContent = `Player ${currentPlayer}'s turn`;
    }
}

function checkWinner() {

    for (let condition of winConditions) {

        const a = condition[0];
        const b = condition[1];
        const c = condition[2];

        if (board[a] && board[a] === board[b] && board[a] === board[c]) {

            gameActive = false;

            cells[a].classList.add("win");
            cells[b].classList.add("win");
            cells[c].classList.add("win");

            statusText.textContent = `Player ${board[a]} Wins!`;
            return;
        }
    }

    if (!board.includes("")) {
        gameActive = false;
        statusText.textContent = "It's a Draw!";
    }
}

resetBtn.addEventListener("click", resetGame);

function resetGame() {

    board = ["", "", "", "", "", "", "", "", ""];
    currentPlayer = "X";
    gameActive = true;

    cells.forEach(cell => {
        cell.textContent = "";
        cell.classList.remove("win");
    });

    statusText.textContent = "Player X's turn";
}