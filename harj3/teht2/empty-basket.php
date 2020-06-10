<?php
    //nollataan määrät
    setcookie('passat',0);
    setcookie('multivan',0);

    //redirect taas ostoskoriin
    header("Location: ./kori.php"); 
    exit();
?>