<?php
    //ladataan evästeestä määrät
    $passat = $_COOKIE["passat"];
    $multivan = $_COOKIE["multivan"];
?>
<title>OstosKoriTori - Ostoskori</title>
<link rel="stylesheet" href="teht2.css" type="text/css">
<div id="container">
    <?php include('navbar.php'); ?>
    <h2> OstosKoriTori </h2>

    <div class="box1">
        <img src="./media/passat.jpg">
        <p>Passat <?php echo $passat ?> kpl</p>
        <img src="./media/multivan.jpg">
        <p>Multivan <?php echo $multivan ?> kpl</p>
    </div>
    <a href="./empty-basket.php">Tyhjennä Ostoskori</a>
</div>