<?php
    session_start();
    $passat = $_SESSION["passat"];
    $multivan = $_SESSION["multivan"];
?>
<title>OstosKoriTori - Ostoskori</title>
<link rel="stylesheet" href="teht1.css" type="text/css">
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