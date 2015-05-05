<?php
/**
 * Created by PhpStorm.
 * User: AbdullahAlkawai
 * Date: 2/25/15
 * Time: 7:49 PM
 */
require 'game.inc.php';
require 'format.inc.php';

if ($name != null) {
    $username = $name->getName();
}
else
{
    unset($_SESSION['name']);
    header('Location: ./index.php');
    exit;
}

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

<div class="general">
    <form id="gameform" action="" method="POST">
        <fieldset>
        <?php echo $username;?>'s Sudoku
    <br>
    <?php
    /*
     * The first row
     */
    $html = "<table>";

    for($r=0; $r<9; $r++) {
        /*
        * The rest of the rows
        */

        for($c=0; $c<9; $c++) {
            $html .=  "<td class='nothing'><button onclick=" . "cellClicked(this)" . " key=" . "null" . " name=" . "cell" . " value=" . $r . "," . $c . " alt=\"not set\">&nbsp</button></td>";

        }
        $html .=  "</tr>";
    }

    $html .= "</table>";
    echo $html;
    ?>
    <br>
    <p><b><a href="game-post.php?g=1">Give up!</a></b></p>
    <br>
            </fieldset>
    </form>
</div>

<script>

    var sudokuTable = document.getElementById("gameform");
    var tableButton = sudokuTable.getElementsByTagName("button");

    for(var i=0; i<81; i++) {

        var buttonVal = tableButton[i].value;

        var numVal1 = buttonVal.charAt(0);
        var numVal2 = buttonVal.charAt(2);

        if (numVal1 == 2 || numVal1 == 5) {
            tableButton[i].parentNode.className = "rowborder";
        }

        if (numVal2 == 2 || numVal2 == 5) {
            tableButton[i].parentNode.className = "colborder";

            if (numVal1 == 2 || numVal1 == 5 ) {
                tableButton[i].parentNode.className = "rowcolborder";
            }

        }

    }

    function cellClicked(item) {

        event.preventDefault();

    }

</script>

</body>
</html>