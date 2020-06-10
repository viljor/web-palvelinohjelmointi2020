<?php
    session_start();
    $_SESSION["passat"] = 0;
    $_SESSION["multivan"] = 0;

    header("Location: ./kori.php"); 
    exit();
?>