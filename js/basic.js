const tableCells = document.querySelectorAll('[data-cell]')
const xPlayer = 'x'
const oPlayer = 'o'
let oTurn
tableCells.forEach(td => {
  td.addEventListener('click', handleClick, {once:true})
})

function handleClick(e){
  const cell = e.target //target clicked cell
  const turn = oTurn ? oPlayer : xPlayer //if it's o's turn, return o, if not return x
  placeLetter(cell, turn)
}

function placeLetter(cell, turn){
  cell.classList.add(turn)
}
