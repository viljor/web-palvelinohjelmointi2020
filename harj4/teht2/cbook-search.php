<?php
    $searchWord=$_GET['searchTerm'];
    header("Location: http://" . $_SERVER['HTTP_HOST']
    . dirname($_SERVER['PHP_SELF']) . '/'
    . "cbook-list.php?searchWord=$searchWord");
?>