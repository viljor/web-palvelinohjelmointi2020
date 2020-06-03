<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjoitukset 2: Tehtävä 1</title>
</head>
<?php
    $paa = isset($_GET['Päänsärky]']) ? $_GET['Päänsärky'] : '';
    $valittu[0] = '';
    if (!empty($_GET['Päänsärky'])) {
        $valittu[0] = 'checked';
    }
    else {
        $valittu[0] = '';
    }

    $valittu[1] = '';
    if (!empty($_GET['Väsymys'])) {
        $valittu[1] = 'checked';
    }
    else {
        $valittu[1] = '';
    }

    $valittu[2] = '';
    if (!empty($_GET['Perjantai'])) {
        $valittu[2] = 'checked';
    }
    else {
        $valittu[2] = '';
    }


    $lomake = <<< EOLomake
    <form method="get" action="{$_SERVER['PHP_SELF']}">
        <input type="checkbox" name="Päänsärky" value="Pää pipi" {$valittu[0]}><label for="Päänsärky">Päänsärky</label><br>
        <input type="checkbox" name="Väsymys" value="Väsy" {$valittu[1]}><label for="Väsymys">Väsymys</label><br>
        <input type="checkbox" name="Perjantai" value="Krapula" {$valittu[2]}><label for="Perjantai">Perjantai</label><br>
        <br>
        <input type="submit" name="painike" value="Kerro tunne">
    </form>
    EOLomake;

    
    
    if(isset($_GET['Päänsärky'])) 
     {
         echo $_GET['Päänsärky'];
         echo "<br>";
     }

    if(isset($_GET['Väsymys'])) 
     {
         echo $_GET['Väsymys'];
         echo "<br>";
     }
     if(isset($_GET['Perjantai'])) 
     {
         echo $_GET['Perjantai'];
         echo "<br>";
     }

    echo $lomake
?>
<body>

</body>
</html>