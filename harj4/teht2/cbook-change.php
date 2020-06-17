<?php $errMsg = update_form(); ?>


<title>cbook-save.php</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<div id='container'>
  <?php include('navbar.php');?>
  <?php echo $errMsg;?>
</div>


<?php
/*******************  PHP-toiminnot ******** ***********/

/*******************  Tallennetaan tiedot  ********************/
function update_form() {

    require_once("/home/ville/db-config/CustomerDb.php");
    $customerObj = new CustomersDb();

    $errMsg = '';
    $success = 0;
    $nappi = isset($_POST['nappi']) ? $_POST['nappi'] : "Tallenna";

    if($_POST['nappi'] == "Poista") {
        $id = isset($_POST['custId']) ? $_POST['custId'] : 0;
        $customerObj->deleteCustomer($id);

        header("Location: http://" . $_SERVER['HTTP_HOST']
        . dirname($_SERVER['PHP_SELF']) . '/'
        . "cbook-list.php");
    }
    else {
        // Datan vastaanotto
        $name       = isset($_POST['name'])       ? $_POST['name']       : '';
        $birth_date = isset($_POST['birth_date']) ? $_POST['birth_date'] : '';
        $id = isset($_POST['custId']) ? $_POST['custId'] : 1;

        // Alkeellista tarkistusta lisäystä varten
        if (strlen($name)>=1 AND strlen($birth_date)>=1) {
            $success = $customerObj->changeCustomer($name, $birth_date, $id);
        }

        if ($success) {
            header("Location: http://" . $_SERVER['HTTP_HOST']
            . dirname($_SERVER['PHP_SELF']) . '/'
            . "cbook-list.php");
        } else {
            $errMsg = "<p>Tallentamisessa jotain ongelmaa</p>";
            return ("$errMsg");
        }
    }

}