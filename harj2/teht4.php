<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjoitukset 2: Tehtävä 4</title>
</head>
<?php
    $counter = isset($_GET["counter"]) ? $_GET["counter"] : 0;

    if($counter < 3) {
        $counter++;
    }
    else {
        $counter = 0;
    }
?>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="submit" name="Lähetä" value="Hullu Nappi">
        <input type="text" name="counter" value="<?php echo $counter; ?>">
    </form>
</body>
</html>