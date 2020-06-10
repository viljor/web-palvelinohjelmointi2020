<?php
// h3t1-basket-session.php
session_start();
$ostot = array();
?>
<title>OstosKoriTori</title>
<link rel="stylesheet" href="teht1.css" type="text/css">

<title>OstosKoriTori</title>
<div id='container'>
<?php include('navbar.php');?>

<h2>OstosKoriTori</h2>


<div class="boxi">

<p>Lisää auto ostoskoriin klikkaamalla kuvaa!</p>

<a href="add-basket.php?id=passat"><img src="./media/passat.jpg"></a>
<a href="add-basket.php?id=multivan"><img src="./media/multivan.jpg"></a>


</div>

</div>