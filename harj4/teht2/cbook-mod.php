<title>cbook-list.php</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<div id='container'>
  <?php include('navbar.php');?>
  <?php page_content();?>
</div>

<?php
/*******************  PHP-toiminnot ******** ***********/

/***********  Datan hakeminen tietokannasta  ***********/
function page_content() {

    require_once("/home/ville/db-config/CustomerDb.php");
    $customerObj = new CustomersDb();
    $tyhja_hakusana = '';
    $gotID = $_GET['id'];
    $customers = $customerObj->getACustomer($gotID);

    if (count($customers)>=1) echo do_mod_form($customers);
    //var_dump($customers); // ks. tarvittaessa
}

/***********  Asiakaslista HTML-taulukkona  ***********/
function do_mod_form($customers) {
    $form = "<h3>Muokkaa asiakasta</h3><br>"  .
    '<div class="boxi">' .
    '<form action="cbook-change.php" method="post">';

    foreach ($customers as $customer) {
        $name = $customer->name;
        $form .= "Nimi<br>" .
        "<input type='text' name='name' value='{$name}'><br>" .
        "Syntymäpäivä<br>" .
       "<input type='text' name='birth_date' value=$customer->birth_date><br><br>" .
       "<input type='hidden' id='custId' name='custId' value={$_GET['id']}><br>" .
       "<input type='submit' name='nappi' value='Tallenna'>" .
       "<input type='submit' name='nappi' value='Poista'>";

    }
    $form .= "</form>" .
    "</div>";

    return $form;
}