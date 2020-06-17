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
    if(isset($_GET['searchWord'])) {
        $customers = $customerObj->getCustomers($_GET['searchWord']);
    }
    else {
        $tyhja_hakusana = '';
        $customers = $customerObj->getCustomers($tyhja_hakusana);
    }

    if (count($customers)>=1) echo do_html_table($customers);
    //var_dump($customers); // ks. tarvittaessa
}

/***********  Asiakaslista HTML-taulukkona  ***********/
function do_html_table($customers) {
    $html = "<table>";

    // Otsikkorivi
    $html .= "<tr>";
    foreach ($customers[0] as $key => $value) {    
        $html .=  "<th>" . ucfirst($key) . "</th>";
    }
    $html .= "</tr>";

    // Tulosrivit
    foreach ($customers as $customer) {    
        $html .= "<tr>" .
                 "<td>$customer->id</td>" .
                 "<td><a href='/harj4/teht2/cbook-mod.php?id=$customer->id'>$customer->name</a></td>" .
                 "<td>$customer->birth_date</td>" .
                 "<td>$customer->created_at</td>" .
                 "</tr>";
    }
    $html .= "</table>";

    return $html;
}