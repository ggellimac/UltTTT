var player1 = 'X';
var player2 = 'O';

var currentTurn = 1;
var movesMade = 0;

var winnerContainer = $('.winner');
var reset = $('.reset');

var sqr = $('.minisquare');

var currentId;
var currentSqr;

var possibleCombos = [
    [0, 1, 2], [3, 4, 5], [6, 7, 8], [0, 3, 6], [1, 4, 7], [2, 5, 8], [0, 4, 8], [2, 4, 6],
    [9, 10, 11], [12, 13, 14], [15, 16, 17], [9, 12, 15], [10, 13, 16], [11, 14, 17], [9, 13, 17], [11, 13, 15],
    [18, 19, 20], [21, 22, 23], [24, 25, 26], [18, 21, 24], [19, 22, 25], [20, 23, 26], [18, 22, 26], [20, 22, 24],
    [27, 28, 29], [30, 31, 32], [33, 34, 35], [27, 30, 33], [28, 31, 34], [29, 32, 35], [27, 31, 35], [29, 31, 33],
    [36, 37, 38], [39, 40, 41], [42, 43, 44], [36, 39, 42], [37, 40, 43], [38, 41, 44], [36, 40, 44], [38, 40, 42],
    [45, 46, 47], [48, 49, 50], [51, 52, 53], [45, 48, 51], [46, 49, 52], [47, 50, 53], [45, 49, 53], [47, 49, 51],
    [54, 55, 56], [57, 58, 59], [60, 61, 62], [54, 57, 60], [55, 58, 61], [56, 59, 62], [54, 58, 62], [56, 58, 60],
    [63, 64, 65], [66, 67, 68], [69, 70, 71], [63, 66, 69], [64, 67, 70], [65, 68, 71], [63, 67, 71], [65, 67, 69],
    [72, 73, 74], [75, 76, 77], [78, 79, 80], [72, 75, 78], [73, 76, 79], [74, 77, 80], [72, 76, 80], [74, 76, 78]
];
var setSqr;

sqr.on('click', (e) => {
    movesMade++;
    //track moves
    if (currentTurn % 2 === 1) {
        event.target.innerHTML = player1;
        event.target.style.color = "midnightblue";
        currentTurn++;
    } else {
        event.target.innerHTML = player2;
        event.target.style.color = "royalblue";
        currentTurn--;
    }


    currentId = e.currentTarget.id;
    enableMiniboard(currentId);
    checkCurrentSqr(currentId); //checks which of the 9 game boards the player is on and assigns to var "currentSqr"

    //passes the id of the local/small board and checks if there is a winner
    localCheckForWinner(currentSqr);

    if (globalCheckForWinner()) {
        theWinner = currentTurn == 1 ? player2 : player1;
        declareWinner(theWinner);
    }
});

//TODO: Fix reset
reset.on('click', (e) => {
    var moves = Array.prototype.slice.call($(".minisquare"));
    moves.map((m) => {
        m.innerHTML = "";
    });
    winnerContainer.html('');
    winnerContainer.css('display', "none");
    currentTurn = 1;
});

function declareWinner(winner) {
    winnerContainer.css('display', "block");
    reset.css('display', 'block');
    winner = winner === player1 ? 'X' : 'O';
    winnerContainer.html(winner + " Wins!");
}

//returns which of the 9 small boards the player is on and assigns it to "currentSqr"
function checkCurrentSqr(id){
    if(id == "l11" || id == "l12" || id == "l13" || id == "l14" || id == "l15" || id == "l16" || id == "l17" || id == "l18" || id == "l19"){
        currentSqr = "g1";
    }
    else if(id == "l21" || id == "l22" || id == "l23" || id == "l24" || id == "l25" || id == "l26" || id == "l27" || id == "l28" || id == "l29"){
        currentSqr = "g2";
    }
    else if(id == "l31" || id == "l32" || id == "l33" || id == "l34" || id == "l35" || id == "l36" || id == "l37" || id == "l38" || id == "l39"){
        currentSqr = "g3";
    }
    else if(id == "l41" || id == "l42" || id == "l43" || id == "l44" || id == "l45" || id == "l46" || id == "l47" || id == "l48" || id == "l49"){
        currentSqr = "g4";
    }
    else if(id == "l51" || id == "l52" || id == "l53" || id == "l54" || id == "l55" || id == "l56" || id == "l57" || id == "l58" || id == "l59"){
        currentSqr = "g5";
    }
    else if(id == "l61" || id == "l62" || id == "l63" || id == "l64" || id == "l65" || id == "l66" || id == "l67" || id == "l68" || id == "l69"){
        currentSqr = "g6";
    }
    else if(id == "l71" || id == "l72" || id == "l73" || id == "l74" || id == "l75" || id == "l76" || id == "l77" || id == "l78" || id == "l79"){
        currentSqr = "g7";
    }
    else if(id == "l81" || id == "l82" || id == "l83" || id == "l84" || id == "l85" || id == "l86" || id == "l87" || id == "l88" || id == "l89"){
        currentSqr = "g8";
    }
    else if(id == "l91" || id == "l92" || id == "l93" || id == "l94" || id == "l95" || id == "l96" || id == "l97" || id == "l98" || id == "l99"){
        currentSqr = "g9";
    }
}

//TODO: disable other boards
//Highlights playable mini-boards
function enableMiniboard(id){
    var select = [];
    for(var i=1; i<=9; i++){
        if(document.getElementById("g"+i).textContent == "X" || document.getElementById("g"+i).textContent == "O"){
            select.push("g"+i)
        }
    }
    for(var i=1; i<=9; i++){
        document.getElementById("g"+i).style.backgroundColor = "rgba(255, 255, 255, 0.5)";
    }
    if(id == "l11" || id == "l21" || id == "l31" || id == "l41" || id == "l51" || id == "l61" || id == "l71" || id == "l81" || id == "l91"){
        if(document.getElementById("g1").textContent == "X" || document.getElementById("g1").textContent == "O"){
            for(var i=1; i<=9; i++){
                document.getElementById("g"+i).style.backgroundColor = "floralwhite";
            }
            for(var i=0; i<select.length; i++){
                document.getElementById(select[i]).style.backgroundColor = "rgba(255, 255, 255, 0.5)";
            }

        }
        else{document.getElementById("g1").style.backgroundColor = "floralwhite";}
    }
    else if(id == "l12" || id == "l22" || id == "l32" || id == "l42" || id == "l52" || id == "l62" || id == "l72" || id == "l82" || id == "l92"){
        if(document.getElementById("g2").textContent == "X" || document.getElementById("g2").textContent == "O"){
            for(var i=1; i<=9; i++){
                document.getElementById("g"+i).style.backgroundColor = "floralwhite";
            }
            for(var i=0; i<select.length; i++){
                document.getElementById(select[i]).style.backgroundColor = "rgba(255, 255, 255, 0.5)";
            }
        }
        else{document.getElementById("g2").style.backgroundColor = "floralwhite";}
    }
    else if(id == "l13" || id == "l23" || id == "l33" || id == "l43" || id == "l53" || id == "l63" || id == "l73" || id == "l83" || id == "l93"){
        if(document.getElementById("g3").textContent == "X" || document.getElementById("g3").textContent == "O"){
            for(var i=1; i<=9; i++){
                document.getElementById("g"+i).style.backgroundColor = "floralwhite";
            }
            for(var i=0; i<select.length; i++){
                document.getElementById(select[i]).style.backgroundColor = "rgba(255, 255, 255, 0.5)";
            }
        }
        else{document.getElementById("g3").style.backgroundColor = "floralwhite";}
    }
    else if(id == "l14" || id == "l24" || id == "l34" || id == "l44" || id == "l54" || id == "l64" || id == "l74" || id == "l84" || id == "l94"){
        if(document.getElementById("g4").textContent == "X" || document.getElementById("g4").textContent == "O"){
            for(var i=1; i<=9; i++){
                document.getElementById("g"+i).style.backgroundColor = "floralwhite";
            }
            for(var i=0; i<select.length; i++){
                document.getElementById(select[i]).style.backgroundColor = "rgba(255, 255, 255, 0.5)";
            }
        }
        else{document.getElementById("g4").style.backgroundColor = "floralwhite";}
    }
    else if(id == "l15" || id == "l25" || id == "l35" || id == "l45" || id == "l55" || id == "l65" || id == "l75" || id == "l85" || id == "l95"){
        if(document.getElementById("g5").textContent == "X" || document.getElementById("g5").textContent == "O"){
            for(var i=1; i<=9; i++){
                document.getElementById("g"+i).style.backgroundColor = "floralwhite";
            }
            for(var i=0; i<select.length; i++){
                document.getElementById(select[i]).style.backgroundColor = "rgba(255, 255, 255, 0.5)";
            }
        }
        else{document.getElementById("g5").style.backgroundColor = "floralwhite";}
    }
    else if(id == "l16" || id == "l26" || id == "l36" || id == "l46" || id == "l56" || id == "l66" || id == "l76" || id == "l86" || id == "l96"){
        if(document.getElementById("g6").textContent == "X" || document.getElementById("g6").textContent == "O"){
            for(var i=1; i<=9; i++){
                document.getElementById("g"+i).style.backgroundColor = "floralwhite";
            }
            for(var i=0; i<select.length; i++){
                document.getElementById(select[i]).style.backgroundColor = "rgba(255, 255, 255, 0.5)";
            }
        }
        else{document.getElementById("g6").style.backgroundColor = "floralwhite";}
    }
    else if(id == "l17" || id == "l27" || id == "l37" || id == "l47" || id == "l57" || id == "l67" || id == "l77" || id == "l87" || id == "l97"){
        if(document.getElementById("g7").textContent == "X" || document.getElementById("g7").textContent == "O"){
            for(var i=1; i<=9; i++){
                document.getElementById("g"+i).style.backgroundColor = "floralwhite";
            }
            for(var i=0; i<select.length; i++){
                document.getElementById(select[i]).style.backgroundColor = "rgba(255, 255, 255, 0.5)";
            }
        }
        else{document.getElementById("g7").style.backgroundColor = "floralwhite";}
    }
    else if(id == "l18" || id == "l28" || id == "l38" || id == "l48" || id == "l58" || id == "l68" || id == "l78" || id == "l88" || id == "l98"){
        if(document.getElementById("g8").textContent == "X" || document.getElementById("g8").textContent == "O"){
            for(var i=1; i<=9; i++){
                document.getElementById("g"+i).style.backgroundColor = "floralwhite";
            }
            for(var i=0; i<select.length; i++){
                document.getElementById(select[i]).style.backgroundColor = "rgba(255, 255, 255, 0.5)";
            }
        }
        else{document.getElementById("g8").style.backgroundColor = "floralwhite";}
    }
    else if(id == "l19" || id == "l29" || id == "l39" || id == "l49" || id == "l59" || id == "l69" || id == "l79" || id == "l89" || id == "l99"){
        if(document.getElementById("g9").textContent == "X" || document.getElementById("g9").textContent == "O"){
            for(var i=1; i<=9; i++){
                document.getElementById("g"+i).style.backgroundColor = "floralwhite";
            }
            for(var i=0; i<select.length; i++){
                document.getElementById(select[i]).style.backgroundColor = "rgba(255, 255, 255, 0.5)";
            }
        }
        else{document.getElementById("g9").style.backgroundColor = "floralwhite";}
    }
}

//TODO: fix
//Checks if there is a winning combination in Global Board
function globalCheckForWinner() {
    //at least four moves for win
    if (movesMade > 4) {
        var sqr = $('.square');
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

function condenseCombo(){
    for(var i=1; i<=9; i++){
        if(document.getElementById("g"+i).textContent != ""){
            setSqr++;
        }
    }
    for(var i=1; i<=(setSqr*8); i++){
        possibleCombos.pop();
    }
    alert(possibleCombos);
}

function localCheckForWinner(sqr) {
    var moves = Array.prototype.slice.call($(".minisquare")); //takes the contents of the small board and puts it into an array
    var results = moves.map(function(square) { return square.innerHTML; }); //store contents in var
    if(sqr == "g1"){
        winningCombos = [[0, 1, 2], [3, 4, 5], [6, 7, 8], [0, 3, 6], [1, 4, 7], [2, 5, 8], [0, 4, 8], [2, 4, 6]];
        return winningCombos.find(function(combo1) {
            if (results[combo1[0]] !== "" && results[combo1[1]] !== "" && results[combo1[2]] !== "" && results[combo1[0]] === results[combo1[1]] &&  results[combo1[1]] === results[combo1[2]]) {
                document.getElementById("g1").innerHTML = currentTurn == 1 ? player2 : player1;
                if(document.getElementById("g1").textContent == "X"){
                    document.getElementById("g1").style.color = "midnightblue";
                }
                else if(document.getElementById("g1").textContent == "O"){
                    document.getElementById("g1").style.color = "royalblue";
                }
                return true;
            } else {
                return false;
            }
        });
    }
    if(sqr == "g2"){
        winningCombos = [[9, 10, 11], [12, 13, 14], [15, 16, 17], [9, 12, 15], [10, 13, 16], [11, 14, 17], [9, 13, 17], [11, 13, 15]];
        return winningCombos.find(function(combo2) {
            if (results[combo2[0]] !== "" && results[combo2[1]] !== "" && results[combo2[2]] !== "" && results[combo2[0]] === results[combo2[1]] &&  results[combo2[1]] === results[combo2[2]]) {
                document.getElementById("g2").innerHTML = currentTurn == 1 ? player2 : player1;
                if(document.getElementById("g2").textContent == "X"){
                    document.getElementById("g2").style.color = "midnightblue";
                }
                else if(document.getElementById("g2").textContent == "O"){
                    document.getElementById("g2").style.color = "royalblue";
                }
                return true;
            } else {
                return false;
            }
        });
    }
    if(sqr == "g3"){
        winningCombos = [[18, 19, 20], [21, 22, 23], [24, 25, 26], [18, 21, 24], [19, 22, 25], [20, 23, 26], [18, 22, 26], [20, 22, 24]];
        return winningCombos.find(function(combo3) {
            if (results[combo3[0]] !== "" && results[combo3[1]] !== "" && results[combo3[2]] !== "" && results[combo3[0]] === results[combo3[1]] &&  results[combo3[1]] === results[combo3[2]]) {
                document.getElementById("g3").innerHTML = currentTurn == 1 ? player2 : player1;
                if(document.getElementById("g3").textContent == "X"){
                    document.getElementById("g3").style.color = "midnightblue";
                }
                else if(document.getElementById("g3").textContent == "O"){
                    document.getElementById("g3").style.color = "royalblue";
                }
                return true;
            } else {
                return false;
            }
        });
    }
    else if(sqr == "g4"){
        winningCombos = [[27, 28, 29], [30, 31, 32], [33, 34, 35], [27, 30, 33], [28, 31, 34], [29, 32, 35], [27, 31, 35], [29, 31, 33]];
        return winningCombos.find(function(combo4) {
            if (results[combo4[0]] !== "" && results[combo4[1]] !== "" && results[combo4[2]] !== "" && results[combo4[0]] === results[combo4[1]] &&  results[combo4[1]] === results[combo4[2]]) {
                document.getElementById("g4").innerHTML = currentTurn == 1 ? player2 : player1;
                if(document.getElementById("g4").textContent == "X"){
                    document.getElementById("g4").style.color = "midnightblue";
                }
                else if(document.getElementById("g4").textContent == "O"){
                    document.getElementById("g4").style.color = "royalblue";
                }
                return true;
            } else {
                return false;
            }
        });
    }
    else if(sqr == "g5"){
        winningCombos = [[36, 37, 38], [39, 40, 41], [42, 43, 44], [36, 39, 42], [37, 40, 43], [38, 41, 44], [36, 40, 44], [38, 40, 42]];
        return winningCombos.find(function(combo5) {
            if (results[combo5[0]] !== "" && results[combo5[1]] !== "" && results[combo5[2]] !== "" && results[combo5[0]] === results[combo5[1]] &&  results[combo5[1]] === results[combo5[2]]) {
                document.getElementById("g5").innerHTML = currentTurn == 1 ? player2 : player1;
                if(document.getElementById("g5").textContent == "X"){
                    document.getElementById("g5").style.color = "midnightblue";
                }
                else if(document.getElementById("g5").textContent == "O"){
                    document.getElementById("g5").style.color = "royalblue";
                }
                return true;
            } else {
                return false;
            }
        });
    }
    else if(sqr == "g6"){
        winningCombos = [[45, 46, 47], [48, 49, 50], [51, 52, 53], [45, 48, 51], [46, 49, 52], [47, 50, 53], [45, 49, 53], [47, 49, 51]];
        return winningCombos.find(function(combo6) {
            if (results[combo6[0]] !== "" && results[combo6[1]] !== "" && results[combo6[2]] !== "" && results[combo6[0]] === results[combo6[1]] &&  results[combo6[1]] === results[combo6[2]]) {
                document.getElementById("g6").innerHTML = currentTurn == 1 ? player2 : player1;
                if(document.getElementById("g6").textContent == "X"){
                    document.getElementById("g6").style.color = "midnightblue";
                }
                else if(document.getElementById("g6").textContent == "O"){
                    document.getElementById("g6").style.color = "royalblue";
                }
                return true;
            } else {
                return false;
            }
        });
    }
    else if(sqr == "g7"){
        winningCombos = [[54, 55, 56], [57, 58, 59], [60, 61, 62], [54, 57, 60], [55, 58, 61], [56, 59, 62], [54, 58, 62], [56, 58, 60]];
        return winningCombos.find(function(combo7) {
            if (results[combo7[0]] !== "" && results[combo7[1]] !== "" && results[combo7[2]] !== "" && results[combo7[0]] === results[combo7[1]] &&  results[combo7[1]] === results[combo7[2]]) {
                document.getElementById("g7").innerHTML = currentTurn == 1 ? player2 : player1;
                if(document.getElementById("g7").textContent == "X"){
                    document.getElementById("g7").style.color = "midnightblue";
                }
                else if(document.getElementById("g7").textContent == "O"){
                    document.getElementById("g7").style.color = "royalblue";
                }
                return true;
            } else {
                return false;
            }
        });
    }
    else if(sqr == "g8"){
        winningCombos = [[63, 64, 65], [66, 67, 68], [69, 70, 71], [63, 66, 69], [64, 67, 70], [65, 68, 71], [63, 67, 71], [65, 67, 69]];
        return winningCombos.find(function(combo8) {
            if (results[combo8[0]] !== "" && results[combo8[1]] !== "" && results[combo8[2]] !== "" && results[combo8[0]] === results[combo8[1]] &&  results[combo8[1]] === results[combo8[2]]) {
                document.getElementById("g8").innerHTML = currentTurn == 1 ? player2 : player1;
                if(document.getElementById("g8").textContent == "X"){
                    document.getElementById("g8").style.color = "midnightblue";
                }
                else if(document.getElementById("g8").textContent == "O"){
                    document.getElementById("g8").style.color = "royalblue";
                }
                return true;
            } else {
                return false;
            }
        });
    }
    else if(sqr == "g9"){
        winningCombos = [[72, 73, 74], [75, 76, 77], [78, 79, 80], [72, 75, 78], [73, 76, 79], [74, 77, 80], [72, 76, 80], [74, 76, 78]];
        return winningCombos.find(function(combo9) {
            if (results[combo9[0]] !== "" && results[combo9[1]] !== "" && results[combo9[2]] !== "" && results[combo9[0]] === results[combo9[1]] &&  results[combo9[1]] === results[combo9[2]]) {
                document.getElementById("g9").innerHTML = currentTurn == 1 ? player2 : player1;
                if(document.getElementById("g9").textContent == "X"){
                    document.getElementById("g9").style.color = "midnightblue";
                }
                else if(document.getElementById("g9").textContent == "O"){
                    document.getElementById("g9").style.color = "royalblue";
                }
                return true;
            } else {
                return false;
            }
        });
    }
}
