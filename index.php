<?php
//require 'game.inc.php';
require 'format.inc.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Super Sudoku</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<header>
    <nav>
        <?php
            echo present_header();
        ?>
    </nav>

    <img src="img/super2-600.png" alt="Sudoku Banner" width="730" height="225">

</header>

<br>

<div class="general">
<h3>Enter your name to begin playing!</h3>
    <form method="post" action="game-post.php">
        <p>
            <input type="text" name="name" id="name">
            <input type="submit">
        </p>
    </form>
</div>

<p class="general">
    <img src="img/gameR300.png">
</p>

<p class="general"><a href="game-post.php?cheat=1"><b>Cheat</b></a></p>
<br>

</body>
</html>