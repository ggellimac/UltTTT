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

    if (checkWinner()) {
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

function checkWinner() {
    //at least four moves needed for a win
    if (numOfMoves > 4) {
        var sqr = $('.square');
        //research why we need call here!
        var moves = Array.prototype.slice.call($(".square"));
        var results = moves.map(function(square) { return square.innerHTML; });
        var winningCombos = [
            [0, 1, 2],
            [3, 4, 5],
            [6, 7, 8],
            [0, 3, 6],
            [1, 4, 7],
            [2, 5, 8],
            [0, 4, 8],
            [2, 4, 6]
        ];
        return winningCombos.find(function(combo) {
            if (results[combo[0]] !== "" && results[combo[1]] !== "" && results[combo[2]] !== "" && results[combo[0]] === results[combo[1]] && results[combo[1]] === results[combo[2]]) {
                return true;
            } else {
                return false;
            }
        });
    }
}
