const tableCells = document.querySelectorAll('[data-cell]');
const xPlayer = 'x';
const oPlayer = 'o';
var numOfMoves = 0;
var currentTurn = 1;
let oTurn
tableCells.forEach(td => {
  td.addEventListener('click', handleClick, {once:true})
})

function handleClick(e){
  const cell = e.target //target clicked cell
  numOfMoves++; //move was made
  if (currentTurn % 2 === 1) {
        event.target.innerHTML = xPlayer;
        currentTurn++;
    } else {
        event.target.innerHTML = oPlayer;
        currentTurn--;
    }

    if (checkForWinner()) {
        theWinner = currentTurn == 1 ? player2 : player1;
        displayWinner(theWinner);
    }
}

function displayWinner(winner) {
    winnerContainer.css('display', "block");
    reset.css('display', 'block');
    winner = winner === player1 ? 'Player1' : 'Player2';
    winnerContainer.html(winner + " Wins!");
}
