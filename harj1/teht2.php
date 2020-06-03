<title>Teht 2: Eurolaskin</title>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
        Muunnettava euromäärä: <br><input type="number" name="eurot"><br>
        <input type="submit" name="painike" value="Lähetä">
</form>

<?php
    if (!isset($_GET['painike'])) exit();
    $markat = $_GET['eurot'] * 5.94573;
    echo "<strong>{$markat}</strong> markkaa<br>";
?>