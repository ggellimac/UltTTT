<?php
include('session.php');
  session_start();
  $cookie_name = $_SESSION['login_name'];
  $cookie_value = "0";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
    <head>
        <title>Ultimate Tic-Tac-Toe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Ultimate Tic-Tac-Toe</h1>
        <div class="header">
            <p>Welcome, <?php echo $_SESSION['login_name'];?>.</p>
            <p id="countdown"><p>
        </div>
        <div class="col-3 button-section">
            <a href = "choose.php" class="btn">Choose Game Mode</a>
            <a href="rules.html" target="_self" class="btn">How To Play</a>
            <a href = "logout.php" class="btn">Sign Out</a>
        </div>
        <div class="col-1"></div>
  
        <div class="board-container flex-container flex-column flex-center">
            <div class='flex-container flex-center'>
                <div class='winner'></div>
                <button class='reset'>Reset</button>
            </div>
            <div class="board flex-container flex-wrap ">
                <div class="square flex-container flex-center" id="g1">
                    <div class="board-container flex-container flex-column flex-center">
                        <div class="miniboard flex-container flex-wrap flex-center">
                            <div class="minisquare flex-container flex-center" id="l11"></div>
                            <div class="minisquare flex-container flex-center" id="l12"></div>
                            <div class="minisquare flex-container flex-center" id="l13"></div>
                            <div class="minisquare flex-container flex-center" id="l14"></div>
                            <div class="minisquare flex-container flex-center" id="l15"></div>
                            <div class="minisquare flex-container flex-center" id="l16"></div>
                            <div class="minisquare flex-container flex-center" id="l17"></div>
                            <div class="minisquare flex-container flex-center" id="l18"></div>
                            <div class="minisquare flex-container flex-center" id="l19"></div>
                        </div>
                    </div>
                </div>
                <div class="square flex-container flex-center" id="g2">
                    <div class="board-container flex-container flex-column flex-center">
                        <div class="miniboard flex-container flex-wrap flex-center">
                            <div class="minisquare flex-container flex-center" id="l21"></div>
                            <div class="minisquare flex-container flex-center" id="l22"></div>
                            <div class="minisquare flex-container flex-center" id="l23"></div>
                            <div class="minisquare flex-container flex-center" id="l24"></div>
                            <div class="minisquare flex-container flex-center" id="l25"></div>
                            <div class="minisquare flex-container flex-center" id="l26"></div>
                            <div class="minisquare flex-container flex-center" id="l27"></div>
                            <div class="minisquare flex-container flex-center" id="l28"></div>
                            <div class="minisquare flex-container flex-center" id="l29"></div>
                        </div>
                    </div>
                </div>
                <div class="square flex-container flex-center" id="g3">
                    <div class="board-container flex-container flex-column flex-center">
                        <div class="miniboard flex-container flex-wrap flex-center">
                            <div class="minisquare flex-container flex-center" id="l31"></div>
                            <div class="minisquare flex-container flex-center" id="l32"></div>
                            <div class="minisquare flex-container flex-center" id="l33"></div>
                            <div class="minisquare flex-container flex-center" id="l34"></div>
                            <div class="minisquare flex-container flex-center" id="l35"></div>
                            <div class="minisquare flex-container flex-center" id="l36"></div>
                            <div class="minisquare flex-container flex-center" id="l37"></div>
                            <div class="minisquare flex-container flex-center" id="l38"></div>
                            <div class="minisquare flex-container flex-center" id="l39"></div>
                        </div>
                    </div>
                </div>
                <div class="square flex-container flex-center" id="g4">
                    <div class="board-container flex-container flex-column flex-center">
                        <div class="miniboard flex-container flex-wrap flex-center">
                            <div class="minisquare flex-container flex-center" id="l41"></div>
                            <div class="minisquare flex-container flex-center" id="l42"></div>
                            <div class="minisquare flex-container flex-center" id="l43"></div>
                            <div class="minisquare flex-container flex-center" id="l44"></div>
                            <div class="minisquare flex-container flex-center" id="l45"></div>
                            <div class="minisquare flex-container flex-center" id="l46"></div>
                            <div class="minisquare flex-container flex-center" id="l47"></div>
                            <div class="minisquare flex-container flex-center" id="l48"></div>
                            <div class="minisquare flex-container flex-center" id="l49"></div>
                        </div>
                    </div>
                </div>
                <div class="square flex-container flex-center" id="g5">
                    <div class="board-container flex-container flex-column flex-center">
                        <div class="miniboard flex-container flex-wrap flex-center">
                            <div class="minisquare flex-container flex-center" id="l51"></div>
                            <div class="minisquare flex-container flex-center" id="l52"></div>
                            <div class="minisquare flex-container flex-center" id="l53"></div>
                            <div class="minisquare flex-container flex-center" id="l54"></div>
                            <div class="minisquare flex-container flex-center" id="l55"></div>
                            <div class="minisquare flex-container flex-center" id="l56"></div>
                            <div class="minisquare flex-container flex-center" id="l57"></div>
                            <div class="minisquare flex-container flex-center" id="l58"></div>
                            <div class="minisquare flex-container flex-center" id="l59"></div>
                        </div>
                    </div>
                </div>
                <div class="square flex-container flex-center" id="g6">
                    <div class="board-container flex-container flex-column flex-center">
                        <div class="miniboard flex-container flex-wrap flex-center">
                            <div class="minisquare flex-container flex-center" id="l61"></div>
                            <div class="minisquare flex-container flex-center" id="l62"></div>
                            <div class="minisquare flex-container flex-center" id="l63"></div>
                            <div class="minisquare flex-container flex-center" id="l64"></div>
                            <div class="minisquare flex-container flex-center" id="l65"></div>
                            <div class="minisquare flex-container flex-center" id="l66"></div>
                            <div class="minisquare flex-container flex-center" id="l67"></div>
                            <div class="minisquare flex-container flex-center" id="l68"></div>
                            <div class="minisquare flex-container flex-center" id="l69"></div>
                        </div>
                    </div>
                </div>
                <div class="square flex-container flex-center" id="g7">
                    <div class="board-container flex-container flex-column flex-center">
                        <div class="miniboard flex-container flex-wrap flex-center">
                            <div class="minisquare flex-container flex-center" id="l71"></div>
                            <div class="minisquare flex-container flex-center" id="l72"></div>
                            <div class="minisquare flex-container flex-center" id="l73"></div>
                            <div class="minisquare flex-container flex-center" id="l74"></div>
                            <div class="minisquare flex-container flex-center" id="l75"></div>
                            <div class="minisquare flex-container flex-center" id="l76"></div>
                            <div class="minisquare flex-container flex-center" id="l77"></div>
                            <div class="minisquare flex-container flex-center" id="l78"></div>
                            <div class="minisquare flex-container flex-center" id="l79"></div>
                        </div>
                    </div>
                </div>
                <div class="square flex-container flex-center" id="g8">
                    <div class="board-container flex-container flex-column flex-center">
                        <div class="miniboard flex-container flex-wrap flex-center">
                            <div class="minisquare flex-container flex-center" id="l81"></div>
                            <div class="minisquare flex-container flex-center" id="l82"></div>
                            <div class="minisquare flex-container flex-center" id="l83"></div>
                            <div class="minisquare flex-container flex-center" id="l84"></div>
                            <div class="minisquare flex-container flex-center" id="l85"></div>
                            <div class="minisquare flex-container flex-center" id="l86"></div>
                            <div class="minisquare flex-container flex-center" id="l87"></div>
                            <div class="minisquare flex-container flex-center" id="l88"></div>
                            <div class="minisquare flex-container flex-center" id="l89"></div>
                        </div>
                    </div>
                </div>
                <div class="square flex-container flex-center" id="g9">
                    <div class="board-container flex-container flex-column flex-center">
                        <div class="miniboard flex-container flex-wrap flex-center">
                            <div class="minisquare flex-container flex-center" id="l91"></div>
                            <div class="minisquare flex-container flex-center" id="l92"></div>
                            <div class="minisquare flex-container flex-center" id="l93"></div>
                            <div class="minisquare flex-container flex-center" id="l94"></div>
                            <div class="minisquare flex-container flex-center" id="l95"></div>
                            <div class="minisquare flex-container flex-center" id="l96"></div>
                            <div class="minisquare flex-container flex-center" id="l97"></div>
                            <div class="minisquare flex-container flex-center" id="l98"></div>
                            <div class="minisquare flex-container flex-center" id="l99"></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        
    </body>
    <script src="js/clock.js"></script>
    <script src="js/ultttt.js"></script>
</html>
