<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjoitukset 2: Tehtävä 3</title>
</head>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
        <select id="hobbies" name="hobbies[]" size="3" multiple="multiple">
            <option value="hockey">Jääkiekko</option>
            <option value="soccer">Jalkapallo</option>
            <option value="f1">Formula 1</option>
        </select>
        <br><br>
        <input type="submit" name="painike" value="Lähetä">
    </form>
</body>
<?php
    $interests = isset($_GET['hobbies']) ? $_GET['hobbies'] :[''];
    //echo $interests;
    foreach ($interests as $selectedOption)
        PrintLinks($selectedOption);

    function PrintLinks($hobby) {
        if($hobby == "hockey") {
            echo "Jääkiekkofanille ehdottaisin<br>";
            echo '<a href="https://jatkoaika.com">Jatkoaika</a>';
            echo '<br>';
            echo '<a href="https://www.mtvuutiset.fi/aihe/jaakiekko/3482038">MTV Urheilu Jääkiekko</a>';
            echo '<br><br>';
        }
        if($hobby == "soccer") {
            echo "Jalkapallon ystävälle tarjoaisin<br>";
            echo '<a href="https://theathletic.com/soccer/">The Athletic/</a>';
            echo '<br>';
            echo '<a href="https://yle.fi/urheilu/jalkapallo">Yle Urheilu Jalkapallo</a>';
            echo '<br><br>';
        }
        if($hobby == "f1") {
            echo "Moottoriurheilun ystävälle tarjolla olisi<br>";
            echo '<a href="https://www.autosport.com/f1">Autosport F1</a>';
            echo '<br>';
            echo '<a href="https://www.bbc.com/sport/formula1">BBC F1</a>';
            echo '<br><br>';
        }
    }
    
?>
</html>