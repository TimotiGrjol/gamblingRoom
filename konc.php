<?php
        session_start();

        $_SESSION["p1Score"];
        $_SESSION["p2Score"];
        $_SESSION["p3Score"];
        $_SESSION["p1"];
        $_SESSION["p2"];
        $_SESSION["p3"];
        $_SESSION["diceNum"];
        $_SESSION["roundNum"];
        $_SESSION["roundN"];


?>

<!DOCTYPE html>
<html lang="sl">
	<head>
		<title>	
        Crippling gambling addiction
		</title>
		<meta charset="utf-8" >
        <link rel="stylesheet" href="css/Style.css">
		<link rel="shortcut icon" href="images/Grayicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
        

	</head>
	<body onload="generate()">
		<form name="Obrazec" id="Obrazec" method="post" autocomplete="off" action="game.php">
        
        <div id="Header">
                
                <strong class="naslov">Crippling gambling addiction</strong>
        </div>
        <div id="wrapper">
            <div class="player">
                <strong class="imena"><?php echo $_SESSION["p1"];  ?></strong></br>
                <strong class="imena"><?php echo $_SESSION["p1Score"];  ?></strong></br>
            </div>
            <div class="player">
                <strong class="imena"><?php echo $_SESSION["p2"];  ?></strong></br>
                <strong class="imena"><?php echo $_SESSION["p2Score"];  ?></strong></br>
            </div>
            <div class="player">
                <strong class="imena"><?php echo $_SESSION["p3"];  ?></strong></br>
                <strong class="imena"><?php echo $_SESSION["p3Score"];  ?></strong></br>
            </div>
            
            
        </div>
        </form>
	</body>
</html>