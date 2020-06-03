<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjoitukset 1: Tehtävä 5</title>
</head>
<body>
</body>
<?php
    $taul = ['Yy','Kaa','Koo','Nee','Vii','Kuu','See','Kasi'];
    taustaVari($taul);

    function taustaVari($ValmisArr) {
        echo "<table>";
        for ($i = 0; $i < count($ValmisArr); $i++) {
            if ($i % 2 == 0) {
                echo "<tr style='background-color: #fff'>";
                echo ("<td>{$ValmisArr[$i]}</td>");
                echo "</tr>";
            }
            else {
                echo "<tr class='colors' style='background-color: #ff0'>";
                echo ("<td>{$ValmisArr[$i]}</td>");
                echo "</tr>";
            }
        }
        echo "</table>";

        if(count($ValmisArr) % 2 == 0) {
            $Index = 0;
        }
        else {
            $Index = 1;
        }
        foreach ($ValmisArr as $Arvo) {
            echo "<table>";
            if ($Index % 2 == 0) {
                echo "<tr style='background-color: #fff'>";
                echo ("<td>{$Arvo}</td>");
                echo "</tr>";
            }
            else {
                echo "<tr class='colors' style='background-color: #ff0'>";
                echo ("<td>{$Arvo}</td>");
                echo "</tr>";
            }
            echo "</table>";
            $Index++;
        }
    }
?>
</html>