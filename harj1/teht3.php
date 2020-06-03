<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjoitukset 1: Tehtävä 3</title>
</head>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
            Tähtiä: <br><input type="number" name="stars"><br>
            <input type="submit" name="painike" value="Lähetä">
    </form>
</body>
<?php
    //main
    $amount = isset($_GET['stars']) ? $_GET['stars'] : 0;
    EchoStars($amount);

    //funktio
    function EchoStars($StarAmount) {
        for ($i = 0; $i < $StarAmount; $i++) {
            echo "*";
         }
    }
?>
</html>