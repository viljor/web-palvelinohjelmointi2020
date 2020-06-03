<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjoitukset 2: Tehtävä 5</title>
</head>
<?php
    $vastaus1 = isset($_GET['kysymys1']) ? $_GET['kysymys1'] : "Väärä";
    $vastaus2 = isset($_GET['kysymys2']) ? $_GET['kysymys2'] : "Väärä";
    $vastaus3 = isset($_GET['kysymys3']) ? $_GET['kysymys3'] : [''];
    $vastaus4 = isset($_GET['kysymys4']) ? $_GET['kysymys3'] : [''];

    $points = 0;

        if($vastaus1 == "Oikea") {
            $points = $points + 3;
        }
        if($vastaus2 == "Oikein") {
            $points = $points + 3;
        }
        if($vastaus2 == "Väärin") {
            $points = $points - 3;
        }
        foreach($vastaus3 as $vastaus) {
            if($vastaus == "Väärin") {
                $points = $points - 3;
            }
            if($vastaus == "Oikein") {
                $points = $points + 3;
            }
        }
        foreach($vastaus4 as $vastauss) {
            if($vastauss == "Väärin") {
                $points = $points - 3;
            }
            if($vastauss == "Oikein") {
                $points = $points + 3;
            }
        }
?>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
        <fieldset>
            <p>Kysymys 1</p>
            <input type="radio" name="kysymys1" value="Oikea">
            <label for="kysymys1">Oikein</label><br>
            <input type="radio" name="kysymys1" value="Väärä">
            <label for="kysymys1">Väärin</label><br>
            <input type="radio" name="kysymys1" value="Väärä">
            <label for="kysymys1">Väärin</label><br>
        </fieldset>
        <fieldset>
            <p>Kysymys 2</p>
            <select>
                <option value="Väärä">1</option>
                <option value="Oikea">Oikein</option>
                <option value="Väärä">3</option>
            </select>
        </fieldset>
        <fieldset> 
            <p>Kysymys 3</p>
            <input type="checkbox" name="kysymys3[]" value="Väärin">
            <label for="kysymys3">Väärin</label><br>
            <input type="checkbox" name="kysymys3[]" value="Väärin">
            <label for="kysymys3">Väärin</label><br>
            <input type="checkbox" name="kysymys3[]" value="Oikein">
            <label for="kysymys3">Oikein</label><br>
        </fieldset>
        <fieldset> 
            <p>Kysymys 4</p>
            <input type="checkbox" name="kysymys4[]" value="Oikein">
            <label for="kysymys4">Oikein</label><br>
            <input type="checkbox" name="kysymys4[]" value="Väärin">
            <label for="kysymys4">Väärin</label><br>
            <input type="checkbox" name="kysymys4[]" value="Oikein">
            <label for="kysymys4">Oikein</label><br>
        </fieldset>
        <br>
        <label for="Nimi">Nimi:</label>
        <input type="text" name="Nimi">
        <br><br>
        <input type="submit" name="Lähetä" value="Lähetä">
    </form>
    <p><?php echo "Hei {$_GET['Nimi']}, sait {$points} pistettä"; ?></p>
</body>
</html>