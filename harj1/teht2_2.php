<?php
    $eurot = isset($_GET['eurot']) ? $_GET['eurot'] : 0;
    $markka_kerroin = 5.94573;
    $markat = $eurot * $markka_kerroin;

    $head = <<<EOHead
        <title>Eurolaskin.php</title>
    EOHead;

    $lomake = <<< EOLomake
        <form method="get" action="{$_SERVER['PHP_SELF']}">
            Eurot:<br>
            <input type="text" name="eurot" value="$eurot"><br>
            <br><br>
            <input type="submit" name="painike" value="Lähetä">
        </form>
    EOLomake;

    $footer = <<<EOFooter
        <hr>
        <p>{$markat} markkaa</p>
        <i>Muunnoskertoimen lähde: <a href="http://www.stat.fi/tup/laskurit/rahanarvonmuunnin.html">http://www.stat.fi/tup/laskurit/rahanarvonmuunnin.html</a></i>
    EOFooter;

    echo $head;
    echo $lomake;
    echo $footer;

?>