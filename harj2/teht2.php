<?php
// sivumuokkain-v2.php

// Jos lomakkeen tiedot on lähetetty, käytetään niitä
$taustavari = isset($_GET['vari']) ? $_GET['vari'] : '#eee';

// Muutetaan HTML-erikoismerkit HTML-entiteeteiksi

// Valittu (1 kpl) taustaväri merkitään 'selected', jotta
// se voidaan asettaa valituksi lomakkeessa
$valittu[0] = ($taustavari == "#ffe400") ? 'checked': '';
$valittu[1] = ($taustavari == "#ac0505") ? 'checked': '';
$valittu[2] = ($taustavari == "#3992d6") ? 'checked': '';
$valittu[3] = ($taustavari == "#e8d07d") ? 'checked': '';
$valittu[4] = ($taustavari == "#666666") ? 'checked': '';


// Asetetaan sivun taustaväri valinnan mukaiseksi
$head = <<<EOHead
<title>Harjoitukset 2: Tehtävä 2</title>
<style type='text/css'>
body { background-color: $taustavari;}
</style>
EOHead;

// Syöttölomake, jonka tiedot lähetetään skriptille itselleen
// Vain valitun taustavärin option saa määritteen 'selected'
$lomake = <<< EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">

<fieldset>
    <input type="radio" value="#ffe400" name="vari" {$valittu[0]}>
    <label for="vari">Keltainen</label><br>
    <input type="radio" value="#ac0505" name="vari" {$valittu[1]}>
    <label for="vari">Punainen</label><br>
    <input type="radio" value="#3992d6" name="vari" {$valittu[2]}>
    <label for="vari">Sininen</label><br>
    <input type="radio" value="#e8d07d" name="vari" {$valittu[3]}>
    <label for="vari">Beige</label><br>
    <input type="radio" value="#666666" name="vari" {$valittu[4]}>
    <label for="vari">Silver</label><br>
</fieldset>

<br><br>

<input type="submit" name="painike" value="Lähetä">
</form>
EOLomake;


// Tulostetaan sivun osat näkyviin
echo $head;
echo $lomake;

?>